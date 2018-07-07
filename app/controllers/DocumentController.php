<?php

class DocumentController extends \BaseController {

	/**
	 * Display a listing of the document with admin controls
	 *
	 * @return Response
	 */
	public function index()
	{
		$Documents = Document::all();
		$byType = function($type){
			return function($Document) use ($type){
				return $Document->type == $type;
			};
		};

		return View::make('admin.documents.index',[
			'vrc'    => $Documents->filter($byType('vrc')),
			'vstars' => $Documents->filter($byType('vstars')),
			'veram' => $Documents->filter($byType('veram')),
			'vatis' => $Documents->filter($byType('vatis')),
			'sop'    => $Documents->filter($byType('sop')),
			'loa'    => $Documents->filter($byType('loa')),
		]);
	}


	/**
	 * Show the form for creating a new document.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.documents.create');
	}


	/**
	 * Store a newly created document in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$file = Input::file('file');

		$file->move(Config::get('app.documentsPath'), $file->getClientOriginalName());
		$relativePath = "/" . basename(Config::get('app.documentsPath')) . "/" . $file->getClientOriginalName();

		$document = new Document;
		$document->fill(Input::all());
		$document->url = $relativePath;
		$document->save();

		ActivityLog::create(['note' => 'Created Document: '.Input::get('name'), 'user_id' => Auth::id(), 'log_state' => 1, 'log_type' => 3]);

		return Redirect::action('DocumentController@index')->with('message', 'Document successfully created!');
	}


	/**
	 * Show the form for editing the specified document.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$Document = Document::find($id);
		return View::make('admin.documents.edit')->with('Document', $Document);
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
		$Document = Document::find($id);

		if ($file && $file->isValid()) {
			$file->move(Config::get('app.documentsPath'), $file->getClientOriginalName());
			$relativePath = "/" . basename(Config::get('app.documentsPath')) . "/" . $file->getClientOriginalName();	
			$Document->url = $relativePath;
		}

		$Document->fill(Input::except('file'));
		$Document->save();

		ActivityLog::create(['note' => 'Updated Document: '.Input::get('name'), 'user_id' => Auth::id(), 'log_state' => 2, 'log_type' => 3]);

		return Redirect::action('DocumentController@index')->withMessage('Document successfully saved!');
	}


	/**
	 * Remove the specified document from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$document = Document::find($id);
		ActivityLog::create(['note' => 'Deleted Document: '.$document->name, 'user_id' => Auth::id(), 'log_state' => 3, 'log_type' => 3]);

		Document::destroy($id);

		return Redirect::to('/admin/docs')->withMessage('Document deleted!');
	}


}
