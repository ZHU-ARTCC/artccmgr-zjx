<?php

class CommsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$comms = Comms::orderBy('facility', 'ASC')->orderBy('type', 'DESC')->get();
		return View::make('admin.comms.index')->with('comms', $comms);
	}

	public function ATISindex()
	{
		$atis = ATIS::orderBy('facility', 'ASC')->get();
		return View::make('admin.comms.atis.index')->with('atis', $atis);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'position'=>'required|unique:comms_airport',
			'name'=>'required',
			'frequency'=>'required',
			'facility'=>'required',
			'pofid'=>'required|unique:comms_airport'
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::route('admin.comms.index')->withErrors($validator);
		}
		else
		{
			$comms = new Comms;
			$comms->fill(Input::all());
			$comms->save();

			return Redirect::action('CommsController@index')->with('message', 'Position successfully created!');
		}
	}

	public function storeATIS()
	{
		$rules = array(
			'position'=>'required|unique:comms_atis',
			'name'=>'required',
			'frequency'=>'required',
			'facility'=>'required'
		);
		
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails())
		{
			return Redirect::route('admin.comms.index')->withErrors($validator);
		}
		else
		{
			$comms = new ATIS;
			$comms->fill(Input::all());
			$comms->save();

			return Redirect::action('CommsController@ATISindex')->with('message', 'ATIS successfully created!');
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
		$comms = Comms::find($id);
		$comms->fill(Input::all());
		$comms->save();

		return Redirect::action('CommsController@index')->with('message', 'Position successfully edited!');
	}

	public function updateATIS($id)
	{
		$comms = ATIS::find($id);
		$comms->fill(Input::all());
		$comms->save();

		return Redirect::action('CommsController@ATISindex')->with('message', 'ATIS successfully edited!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Comms::destroy($id);

		return Redirect::to('/admin/comms')->withMessage('Position deleted!');
	}

	public function destroyATIS($id)
	{
		ATIS::destroy($id);

		return Redirect::to('/admin/comms/atis')->withMessage('ATIS deleted!');
	}


}
