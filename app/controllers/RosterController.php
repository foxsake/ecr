<?php

class RosterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /roster
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /roster/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.roster.form');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /roster
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$s = new Roster;
		$s->subject_code = $input['subject_code'];
		$s->id_number = $input['id_number'];
		$s->save();
		return Redirect::action('ClassController@index');//change
	}

	/**
	 * Display the specified resource.
	 * GET /roster/{id}
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
	 * GET /roster/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		dd("Does not work yet");
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /roster/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /roster/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Roster::find($id)->delete();
		return Redirect::action('ClassController@index');
	}

}