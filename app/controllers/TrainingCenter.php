<?php

class TrainingCenter extends BaseController {

	//front
	public function showIndex() { return View::make('admin.training.center.index'); }

	public function showTraining($view) {
		$view_name = "admin.training.center.".str_replace("/", ".", $view);

		if (View::exists($view_name))
			return View::make($view_name);
		else
			return View::make('admin.training.center.index');
	}
}
