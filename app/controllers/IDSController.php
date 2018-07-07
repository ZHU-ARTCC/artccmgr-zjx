<?php

class IDSController extends BaseController {

	public function showIDS()
	{
		$PageTitle = "IDS";
		$PageText = "Jacksonville ARTCC Status Information Area";
		return View::make('ids.index')->with('PageTitle', $PageTitle)->with('PageText', $PageText);
	}

}
