<?php

class SceneryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fsx = Scenery::where('type', '1')->get();
		$xpl = Scenery::where('type', '2')->get();
		return View::make('admin.scenery.index')->with('fsx', $fsx)->with('xpl', $xpl);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.scenery.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$description = Input::get('description');
		$desc = nl2br(htmlentities($description, ENT_QUOTES, 'UTF-8'));

		$rules = array(
			'name'=>'required',
			'type'=>'required',
			'link'=>'required'
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::route('admin.scenery.create')->withErrors($validator)->withInput();
		}
		else
		{
			Scenery::create([
				'name'=>Input::get('name'),
        		'type'=>Input::get('type'),
        		'description'=>$desc,
				'link'=>Input::get('link')
			]);
		
			return Redirect::route('admin.scenery.index')->with('message', 'Scenery successfully added!');
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
		$scenery = Scenery::find($id);
		return View::make('admin.scenery.edit')->with('scenery', $scenery);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
		$desc = Input::get('description');
		$description = nl2br(htmlentities($desc, ENT_QUOTES, 'UTF-8'));

		$scenery = Scenery::find($id);

 		$scenery->name = Input::get('name');
        $scenery->description = $description;
        $scenery->type = Input::get('type');
        $scenery->link = Input::get('link');
        $scenery->save();
 
        return Redirect::to('/admin/scenery')->with('message', 'Scenery Updated!');
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
