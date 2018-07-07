<?php

class InstructorController extends BaseController {

	public function showOTSRec()
	{
		$ots = OTSRequest::where('complete', '0')->orderBy('created_at', 'ASC')->get();
		return View::make('admin.instructors.otsrec')->with('ots', $ots);
	}

	public function addOTSNote()
	{
		return View::make('admin.instructors.addotsnote');
	}

	public function showExam()
	{
		$user = User::where('status', '0')->orderBy('last_name', 'ASC')->get()->lists('full_name', 'id');
		$exams = Exam::where('complete', '0')->get();
		return View::make('admin.instructors.assignexam')->with('user', $user)->with('exams', $exams);
	}

	public function assignExam()
	{
		$exam = Exam::create([
			'controller_id'=>Input::get('controller_id'),
        	'instructor_id'=>Auth::id(),
        	'exam_id'=>Input::get('exam_id')
		]);

		return Redirect::to('/admin/instructor/exams')->with('message', 'Exam Assigned Successfully!');
	}

	public function destroyExam($id)
	{
		Exam::destroy($id);
		return Redirect::to('/admin/instructor/exams')->with('message', 'Exam Unassigned');
	}

	public function cancelOTS($id)
	{
		$ots = OTSRequest::find($id);
 		$ots->accepted = 0;
 		$ots->mentor_id = 0;
		$ots->save();
		return Redirect::to('/admin/instructor/otsrec')->with('message', 'OTS Canceled');
	}

	public function acceptOTS($id)
	{
		$ots = OTSRequest::find($id);
 		$ots->accepted = 1;
 		$ots->mentor_id = Auth::id();
		$ots->save();
 
        return Redirect::to('/admin/instructor/otsrec')->with('message', 'OTS accepted!');
	}

	public function passOTS($id)
	{
		$ots = OTSRequest::find($id);
 		$ots->complete = 1;
 		$ots->pass = 2;
        $ots->save();
 
        return Redirect::to('/admin/instructor/otsrec')->with('message', 'Maked student passed OTS!');
	}

	public function failOTS($id)
	{
		$ots = OTSRequest::find($id);
 		$ots->complete = 1;
 		$ots->pass = 1;
        $ots->save();
 
        return Redirect::to('/admin/instructor/otsrec')->with('message', 'Maked student failed OTS!');
	}

}
