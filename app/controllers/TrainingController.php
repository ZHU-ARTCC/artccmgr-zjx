<?php
use Carbon\Carbon;

class TrainingController extends BaseController {

	public function showRequests()
	{
		$id = Auth::id();
		$time = Carbon::now('America/Chicago');
		$sessions = MentorAvail::with('mentor')->where('trainee_id', $id)->where('slot', '>', $time)->get();
		return View::make('admin.training.index')->with('sessions', $sessions);
	}

	public function showMentAvail()
	{
		$id = Auth::id();

		$availability = MentorAvail::with('mentor')
			->whereNull('trainee_id')
			->where('slot', '>', Carbon::now(new DateTimeZone('America/Chicago'))->addHours(18))
			->get();

		return View::make('admin.training.mentoravail')->with('availability', $availability);
	}

	public function saveSession()
	{
		$id = Auth::id();
		$nSessions = MentorAvail::where('trainee_id', $id)->where('slot', '>', Carbon::now())->count();

		if ($nSessions >= 5) {
			return Redirect::action('TrainingController@showRequests')->with('message', 'A student is only allowed a maximum of 5 slots assigned at once.');
		}

		$position = Input::get('position');
		$slot_id = Input::get('slot');
		$Slot = MentorAvail::find($slot_id);

		$Slot->trainee_id = $id;
		$Slot->position_id = $position;
		$Slot->trainee_comments = Input::get('comments');
		$Slot->save();

		ActivityLog::create(['note' => 'Accepted Session: '.$Slot->slot, 'user_id' => Auth::id(), 'log_state' => 1, 'log_type' => 6]);

		$Slot->sendNewSessionEmail();

		return Redirect::action('TrainingController@showRequests');
	}

	public function cancelSession($id)
	{
		$session = MentorAvail::find($id);
		$session->sendCancellationEmail();
		$session->trainee_id = null;
		$session->position_id = null;
		$session->trainee_comments = null;
		$session->save();

		ActivityLog::create(['note' => 'Cancelled Session: '.$session->slot, 'user_id' => Auth::id(), 'log_state' => 3, 'log_type' => 6]);

		return Redirect::to('/training')->with('message', 'Training sessions canceled!');
	}

	public function showNotes()
	{
		$id = Auth::id();
		$user = User::find($id);
		$notes = TrainingNote::where('controller_id', $id)->orderBy('created_at', 'ASC')->get();
		$exam = Exam::where('controller_id', '=', $id)->orderBy('updated_at', 'ASC')->get();
		return View::make('admin.training.notes')->with('notes', $notes)->with('user', $user)->with('exam', $exam);
	}

	public function showNote($id)
	{
		$note = TrainingNote::find($id);
		return View::make('admin.training.note')->with('note', $note);
	}

}
