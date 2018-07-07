<?php

use Carbon\Carbon;

class MentorController extends BaseController {

	public function showRequests()
	{
		$sessions = MentorAvail::where('trainee_id', '!=', 0)->where('slot', '>', new Carbon('midnight today', 'America/Chicago'))->orderBy('slot', 'ASC')->get();
		return View::make('admin.mentors.sessions')->with('sessions', $sessions);
	}

	public function findStudents()
	{
		$user = User::where('status', '0')->orderBy('last_name', 'ASC')->get()->lists('backwards_name', 'id');
		return View::make('admin.mentors.studentsearch')->with('user', $user);
	}

	public function findStudent()
	{
		$id = Input::get('controller');
		return Redirect::to('/admin/mentor/student/'.$id);
	}

	public function student($id)
	{
		$user = User::find($id);
		$note = TrainingNote::where('controller_id', '=', $id)->orderBy('date', 'DESC')->orderBy('session_begin', 'DESC')->get();
		$exam = Exam::where('controller_id', '=', $id)->orderBy('updated_at', 'ASC')->get();
		return View::make('admin.mentors.student')->with('user', $user)->with('note', $note)->with('exam', $exam);
	}

	public function showNote($id)
	{
		$note = TrainingNote::find($id);
		return View::make('admin.mentors.note')->with('note', $note);
	}

	public function addNote()
	{
		$user = User::where('status', 0)->orderBy('last_name', 'ASC')->get()->lists('backwards_name', 'id');
		return View::make('admin.mentors.addnote')->with('user', $user);
	}

	public function saveNote()
	{
		$description = Input::get('comments');
		$desc = nl2br(htmlentities($description, ENT_QUOTES, 'UTF-8'));

		TrainingNote::create([
			'controller_id'=>Input::get('controller_id'),
        	'instructor_id'=>Auth::id(),
        	'position'=>Input::get('position'),
        	'type'=>Input::get('type'),
        	'comments'=>$desc,
        	'date'=>Input::get('date'),
        	'session_begin'=>Input::get('session_begin'),
        	'duration'=>Input::get('duration')
		]);

		ActivityLog::create(['note' => 'Added Training Note for: '.Input::get('controller_id') .' on '. Input::get('position'), 'user_id' => Auth::id(), 'log_state' => 1, 'log_type' => 8]);
		
		return Redirect::to('/admin/mentor/addnote')->with('message', 'Training Note Created!');
	}

	public function recOTS()
	{
		$user = User::where('status', '0')->orderBy('last_name', 'ASC')->get()->lists('full_name', 'id');
		return View::make('admin.mentors.recots')->with('user', $user);
	}

	public function saveOTSReq()
	{
		OTSRequest::create([
			'controller_id'=>Input::get('controller'),
        	'position'=>Input::get('position'),
        	'requested_by'=>Auth::id()
		]);

		ActivityLog::create(['note' => Input::get('controller_id') .' suggested for OTS on '. Input::get('position'), 'user_id' => Auth::id(), 'log_state' => 1, 'log_type' => 8]);
		
		return Redirect::to('/admin/mentor/otsrec')->with('message', 'Controller submitted for OTS/Validation!');
	}

	public function cancelSession($id)
	{
		$request = MentorAvail::find($id);
		$request->cancel_message = Input::get('cancel');
		$request->save();
		$request->sendCancellationEmail();
		$request->delete();

		ActivityLog::create(['note' => 'Cancelled Session: '.$request->slot, 'user_id' => Auth::id(), 'log_state' => 3, 'log_type' => 6]);

		return Redirect::to('/admin/mentor/requests')->with('message', 'Session canceled. Student has been notified!');
	}

	public function showChecklists()
	{
		return View::make('admin.mentors.checklists');
	}

	public function showAvail()
	{
		$availability = MentorAvail::where('mentor_id', '=', Auth::id())->get();
		return View::make('admin.mentors.mentoravail')->with('availability', $availability);
	}

	public function postAvail()
	{
		$mentor_id = Auth::id();
		$slots = Input::get('slots');
		$today = new Carbon("midnight today", 'America/Chicago');

		$availability = MentorAvail::where('mentor_id', '=', $mentor_id)->where('slot', '>=', $today)->get();

		if (!$slots) $slots = [];

		// Slots to be added
		$new_slots = array_diff($slots, $availability->lists('slot'));
		// Slots to be deleted
		$old_slots = array_diff($availability->lists('slot'), $slots);

		foreach ($new_slots as $slot) {
			MentorAvail::create([
				'mentor_id' => $mentor_id,
				'slot' => $slot,
			]);
		}

		MentorAvail::where('mentor_id', '=', $mentor_id)->whereNull('trainee_id')->whereIn('slot', $old_slots)->delete();
		ActivityLog::create(['note' => 'Updated Availability', 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 6]);

		return Redirect::action('MentorController@showAvail')->with('message', 'Availability has been updated');
	}

}
