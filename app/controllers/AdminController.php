<?php

class AdminController extends BaseController {

    public function setLOA($id)
    {
        $user = User::find($id);
        $user->loa = 1;
        ActivityLog::create(['note' => "{$id} marked as LOA", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 9]);
        $user->save();

        return Redirect::to('/admin/roster')->with('message', 'User Updated!');
    }

    public function deploy()
    {
        $user_agent = Request::server('HTTP_USER_AGENT');
        $secret_header = Request::header('X-Hub-Signature');
        list($algo, $secret_hash) = explode('=', $secret_header);

        $calc_secret = hash_hmac($algo, Request::getContent(), Config::get('services.github.secret'));

        if (stripos($user_agent, "GitHub-Hookshot/") === 0 && $secret_hash == $calc_secret)
        {
            $spec = [
                    0 => ["pipe", "r"],
                    1 => ["pipe", "w"],
                    2 => ["pipe", "w"],
            ];

            $process = proc_open('./build.sh', $spec, $pipes, __DIR__ . '/../..');

            if (is_resource($process)) {
                $stdout = stream_get_contents($pipes[1]);
                $stderr = stream_get_contents($pipes[2]);

                fclose($pipes[1]);
                fclose($pipes[2]);

                return Response::json(['stdout' => explode("\n", $stdout), 'stderr' => explode("\n", $stderr)]);
            } else {
                return Response::json(['error' => "Couldn't start the proc_open"]);
            }
        }
        else
        {
            return Redirect::to('/');
        }
    }

    public function setActive($id)
    {
        $user = User::find($id);
        $user->loa = 0;
        ActivityLog::create(['note' => "{$id} marked as Active", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 9]);
        $user->save();


        return Redirect::to('/admin/roster')->with('message', 'User Updated!');
    }

    public function setController($id)
    {
        $user = User::find($id);
        $user->status = 0;
        $visitor = $user->visitor;
        $user->save();

        #Mail::send('emails.newmember', ['user' => $user], function($message) use ($user)
        #{
        #    $message->to($user->email)->subject('Welcome to ZHU');
        #});

        ActivityLog::create(['note' => "{$id} marked as a controller", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 9]);
        
        $forum_user = SMFMember::find($id); 
        $forum_user->id_group = $visitor == 1 ? '20' : '21';
        $forum_user->save();


        return Redirect::to('/admin/roster')->with('message', 'User Updated!');
    }

    public function setFormerController($id)
    {
        $user = User::find($id);
        $user->status = 1;
        $user->save();

        ActivityLog::create(['note' => "{$id} marked as  a former controller", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 9]);

        $forum_user = SMFMember::find($id);
        $forum_user->id_group = 0;
        $forum_user->additional_groups = '';
        $forum_user->save();

        Mail::send('emails.formermember', ['user' => $user], function($message) use ($user)
        {
            $message->to($user->email)->subject('Removed From ZHU Roster');
        });

        return Redirect::to('/admin/roster')->with('message', 'Controller removed from active roster!');
    }

    public function saveVisit()
    {
        $rules = array(
            'id'=>'required|numeric|unique:visit_requests|min:700000|max:2000000',
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email',
            'rating_id'=>'required',
            'home'=>'required|min:3|max:8',
            'reason'=>'required'
        );
        
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails())
        {
            return Redirect::to('/visit')->withErrors($validator)->withInput();
        }
        else
        {
            $request = Visit::create([
                'cid'=>Input::get('id'),
                'first_name'=>Input::get('first_name'),
                'last_name'=>Input::get('last_name'),
                'email'=>Input::get('email'),
                'rating_id'=>Input::get('rating_id'),
                'home'=>Input::get('home'),
                'reason'=>Input::get('reason')
            ]);

            Mail::send('emails.pendingvrequests', ['request' => $request], function($message){
                $message->from('no-reply@zhuartcc.org', 'vZHU No-Reply');
                $message->to('atm@zhuartcc.org');
                $message->subject('ZHU - New Visiting Request');
            });
        
            return Redirect::to('/')->with('message', 'Visiting Application received and is pending review from the ATM and DATM. 
                                                       Please make sure you get either your ATM, DATM or Regional Director to send 
                                                       a reference to visit@zjxartcc.org else your application will not be proocessed!');
        }
    }

    public function showVisitRequests()
    {   
        $visit = Visit::where('accepted', '0')->get();
        return View::make('admin.roster.visit')->with('visit', $visit);     
    }

    public function updateVRequest($id)
    {
        $visitr = Visit::find($id);
        $visitr->updated = 1;
        $visitr->sendVReqUpdateEmail();
        $visitr->save();

        ActivityLog::create(['note' => "Sent Visiting Request {$id} 2 week update email", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 10]);

        return Redirect::to('admin/visitreq')->with('message', '2 week notification sent!');
    }

    public function acceptVRequest($id)
    {
        $visitr = Visit::find($id);
        $visitr->accepted = 1;
        $visitr->save();

        ActivityLog::create(['note' => "Visiting Request {$id} accepted", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 10]);

        return Redirect::to('admin/roster/create');
    }

    public function denyVRequest($id)
    {
        $visitr = Visit::find($id);
        $visitr->accepted = 2;
        $visitr->sendVReqDeclineEmail();
        $visitr->save();

        ActivityLog::create(['note' => " Visiting Request {$id} denied", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 10]);
        
        return Redirect::to('/admin/visitreq')->with('message', 'Visiting Request Denied, email sent!');

    }

    public function showMentorHistory()
    {
        //
    }

    public function showAnnouncements()
    {
        $a = Announcement::find(1);
        return View::make('admin.announcements.index')->with('a', $a);
    }

    public function updateAnnouncements()
    {
        $purifier = new HTMLPurifier();
        $message = $purifier->purify(Input::get('message'));

        $a = Announcement::find(1);
        $a->class = Input::get('class');
        $a->message = $message;
        $a->active = Input::get('active') == 1 ? '1' : '0';
        $a->admin_id = Auth::id();
        $a->save();

        ActivityLog::create(['note' => "Front Page Announcement updated", 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 1]);

        return Redirect::to('/admin/announcements')->with('message', 'Message Updated!');
    }

    public function showUserLog()
    {
        $user = User::orderBy('last_name', 'ASC')->get()->lists('full_name', 'id');
        return View::make('admin.logs')->with('user', $user);
    }

    public function log($id)
    {
        $user = User::where('id', '=', $id)->first();
        $log = ControllerLog::where('cid', '=', $id)->orderBy('id', 'DESC')->get();
        return View::make('admin.log')->with('log', $log)->with('user', $user);
    }

    public function showActivityLog()
    {
        $activity = ActivityLog::orderBy('created_at', 'DESC')->paginate(25);
        $user = User::where('status', '0')->orderBy('last_name', 'ASC')->get()->lists('backwards_name', 'id');
        $users = [0 => 'Please Select'] + $user;
        return View::make('admin.activitylog')->with('activity', $activity)->with('users', $users);
    }

    public function filterActivityLog($id)
    {
        $activity = ActivityLog::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
        return Response::json($activity);
    }

    public function showRosterCleanup()
    {
        $users = User::where('status', '=', 0)->get();
        return View::make('admin.rostertidy')->with('users', $users);
    }
}
