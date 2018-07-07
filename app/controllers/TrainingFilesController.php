<?php

class TrainingFilesController extends \BaseController {

	/**
	 * Display a listing of the document.
	 *
	 * @return Response
	 */
	public function index()
	{
		$twr = TrainingFile::where('type', 'twr')->get();
		$ac = TrainingFile::where('type', 'ac')->get();
		$diag = TrainingFile::where('type', 'diag')->get();
		return View::make('admin.mentors.docs.index')->with('twr', $twr)->with('ac', $ac)->with('diag', $diag);
	}


	/**
	 * Show the form for creating a new document.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.mentors.docs.create');
	}


	/**
	 * Store a newly created document in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$file = Input::file('file');

		if (!$file->isValid()) {
			return Redirect::action('TrainingFilesController@create')->with('message', 'File is invalid!');
		}

		$file->move(Config::get('app.documentsPath'), $file->getClientOriginalName());
		$relativePath = "/" . basename(Config::get('app.documentsPath')) . "/" . $file->getClientOriginalName();

		$document = new TrainingFile;
		$document->fill(Input::all());
		$document->url = $relativePath;
		$document->save();

		return Redirect::to('/admin/mentor/files')->with('message', 'Document successfully created!');
	}


	/**
	 * Show the form for editing the specified document.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$document = TrainingFile::find($id);
		return View::make('admin.mentors.docs.edit')->with('document', $document);
	}


	/**
	 * Update the specified document in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$file = Input::file('file');
		$Document = TrainingFile::find($id);

		if ($file && $file->isValid()) {
			$file->move(Config::get('app.documentsPath'), $file->getClientOriginalName());
			$relativePath = "/" . basename(Config::get('app.documentsPath')) . "/" . $file->getClientOriginalName();	
			$Document->url = $relativePath;
		}

		$Document->fill(Input::all());
		$Document->save();

		ActivityLog::create(['note' => 'Updated Document: '.Input::get('name'), 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 3]);

		return Redirect::action('TrainingFilesController@index')->withMessage('Document successfully saved!');
	}


	/**
	 * Remove the specified document from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TrainingFile::destroy($id);

		return Redirect::to('/admin/mentor/files')->withMessage('Document deleted!');
	}


}
