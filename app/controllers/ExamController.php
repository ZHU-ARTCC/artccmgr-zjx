<?php

class ExamController extends BaseController {

	public function showPendingTheoryExams()
	{
		$awaitingexams = Exam::where('controller_id', Auth::id())->where('complete', '0')->orderBy('updated_at', 'DESC')->get();
		return View::make('admin.training.exams.pt')->with('awaitingexams', $awaitingexams);
	}

	public function showCompletedTheoryExams()
	{
		$completedexams = Exam::where('controller_id', Auth::id())->where('complete', '1')->orderBy('updated_at', 'DESC')->get();
		return View::make('admin.training.exams.ct')->with('completedexams', $completedexams);
	}

	public function showPendingPracticalExams()
	{
		$ots = OTSRequest::where('controller_id', Auth::id())->where('complete', '0')->orderBy('updated_at', 'DESC')->get();
		return View::make('admin.training.exams.pp')->with('ots', $ots);
	}

	public function showCompletedPracticalExams()
	{
		$ots = OTSRequest::where('controller_id', Auth::id())->where('complete', '1')->orderBy('updated_at', 'DESC')->get();
		return View::make('admin.training.exams.cp')->with('ots', $ots);
	}

}
