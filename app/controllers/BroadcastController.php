<?php

class BroadcastController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$broadcast = Broadcast::orderBy('created_at', 'DESC')->get();
		return View::make('admin.broadcast.index')->with('broadcast', $broadcast);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.broadcast.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$home        = (int)Input::get('homeController');
		$visitors    = (int)Input::get('visitingController');
		$rating_obs  = (int)Input::get('rating_obs');
		$rating_s1   = (int)Input::get('rating_s1');
		$rating_s2   = (int)Input::get('rating_s2');
		$rating_s3   = (int)Input::get('rating_s3');
		$rating_c1   = (int)Input::get('rating_c1');
		$rating_c3   = (int)Input::get('rating_c3');
		$rating_i1   = (int)Input::get('rating_i1');
		$rating_i3   = (int)Input::get('rating_i3');
		$rating_sup  = (int)Input::get('rating_sup');
		$rating_adm  = (int)Input::get('rating_adm');
		$admin_id    = Auth::id();
		$subject     = Input::get('subject');
		$content     = Input::get('content');

		$broadcast              = new Broadcast;
		$broadcast->subject     = $subject;
		$broadcast->content     = $content;
		$broadcast->admin_id    = $admin_id;
		$broadcast->home        = $home;
		$broadcast->visitors    = $visitors;
		$broadcast->rating_obs  = $rating_obs;
		$broadcast->rating_s1   = $rating_s1;
		$broadcast->rating_s2   = $rating_s2;
		$broadcast->rating_s3   = $rating_s3;
		$broadcast->rating_c1   = $rating_c1;
		$broadcast->rating_c3   = $rating_c3;
		$broadcast->rating_i1   = $rating_i1;
		$broadcast->rating_i3   = $rating_i3;
		$broadcast->rating_sup  = $rating_sup;
		$broadcast->rating_adm  = $rating_adm;
		$broadcast->save();

		ActivityLog::create(['note' => "Sent broadcast: {$subject}", 'user_id' => Auth::id(), 'log_state' => 1, 'log_type' => 2]);


		if($rating_obs == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 1);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 1);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_s1 == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 2);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 2);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_s2 == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 3);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 3);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_s3 == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 4);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 4);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_c1 == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 5);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 5);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_c3== 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 7);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 7);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_i1 == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 8);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 8);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_i3 == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 10);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 10);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_sup == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 11);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 11);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}
		if($rating_adm == 1)
		{
			if($home == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 0)->where('rating_id', 12);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
			if($visitors == 1) 
			{
				$users = User::where('status', 0)->where('visitor', 1)->where('rating_id', 12);
				if(count($users)) { foreach($users->get() as $u) { $broadcast->sendBroadcast($u); } }
			}
		}

		return Redirect::to('/admin/broadcast')->with('message', 'Broadcast Sent!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

}
