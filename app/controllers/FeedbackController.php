<?php

class FeedbackController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		#$feedback = Feedback::with('controller')->where('status', '=', 1)->orWhere('status', 2)->orderBy('created_at', 'DESC')->get();
		$feedback = Feedback::with('controller')->where('status', '=', 1)->orderBy('created_at', 'DESC')->get();
		return View::make('site.feedback.index')->with('feedback', $feedback);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$members = User::orderBy('last_name', 'ASC')->where('status', 0)->get()->lists('backwards_name', 'id');
		return View::make('site.feedback.create')->with('members', $members);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'controller_id'=>'required',
			'position'=>'required',
			'level'=>'required',
			'pilot_name'=>'required',
			'pilot_id'=>'required',
			'pilot_email'=>'required|email',
			'flight_callsign'=>'required',
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::route('feedback.create')->withErrors($validator)->withInput();
		}
		else
		{
			$request = Feedback::create([
				'controller_id'=>Input::get('controller_id'),
        		'position'=>Input::get('position'),
				'level'=>Input::get('level'),
				'comments'=>Input::get('comments'),
				'pilot_name'=>Input::get('pilot_name'),
				'pilot_id'=>Input::get('pilot_id'),
				'pilot_email'=>Input::get('pilot_email'),
				'flight_callsign'=>Input::get('flight_callsign')
			]);

			Mail::send('emails.pendingfeedback', ['request' => $request], function($message){
	            $message->from('no-reply@zhuartcc.org', 'vZHU No-Reply');
	            $message->to('atm@zhuartcc.org');
	            $message->subject('ZHU - New Feedback');
        	});
		
			return Redirect::route('feedback.index')->with('message', 'Feedback Submitted and is pending review!');
		}

		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$f = Feedback::find($id);
		return View::make('site.feedback.show')->with('f', $f);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function approveFeedback($id)
	{
		$pcomm = Input::get('comments');
		$pcomments = nl2br(htmlentities($pcomm, ENT_QUOTES, 'UTF-8'));
		$scomm = Input::get('staff_comments');
		$scomments = nl2br(htmlentities($scomm, ENT_QUOTES, 'UTF-8'));

		$feedback = Feedback::find($id);
 		$feedback->status = 1; 
 		$feedback->comments = $pcomments;
 		$feedback->staff_comments = $scomments;
 		$feedback->sendPilotEmail();
 		$feedback->sendControllerEmail();
        $feedback->save();

        ActivityLog::create(['note' => 'Approved Feedback: '.$feedback->id, 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 5]);
 
        return Redirect::to('/admin/feedback')->with('message', 'Feedback Updated!');
	}

	public function rejectFeedback($id)
	{
		$feedback = Feedback::find($id);
 		$feedback->status = 2;
        $feedback->save();

        ActivityLog::create(['note' => 'Rejected Feedback: '.$feedback->id, 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 5]);
 
        return Redirect::to('/admin/feedback')->with('message', 'Feedback Updated!');
	}

	public function showFeedback()
	{
		$feedback = Feedback::where('status', '=', '0')->orderBy('created_at', 'DESC')->limit(10)->get();
		return View::make('admin.feedback.index')->with('feedback', $feedback);
	}

	public function showFeedbackDetails($id)
	{
		$f = Feedback::find($id);
		return View::make('admin.feedback.show')->with('f', $f);
	}

	public function showApproveFeedback($id)
	{
		$f = Feedback::find($id);
		return View::make('admin.feedback.accept')->with('f', $f);
	}


}
