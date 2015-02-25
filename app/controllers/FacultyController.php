<?php

class FacultyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /faculty
	 *
	 * @return Response
	 */
	public function index()
	{
		$leads = Faculty::all();
		return View::make('faculty.index',compact('leads'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /faculty/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('faculty.form');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /faculty
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$user = new User;
		$faculty = new Faculty;
		if($input['password'] == $input['password2'])
			$user->password = Hash::make($input['password']);
		else
			return Redirect::action('FacultyController@create');
		$faculty->last_name = $input['last_name'];
		$faculty->first_name = $input['first_name'];
		$faculty->mi = $input['mi'];
		$faculty->id_number = $input['id_number'];
		$user->username = $input['id_number'];
		$user->role = "FACULTY";
		$user->save();
		$faculty->save();
		return Redirect::action('FacultyController@index');
	}

	/**
	 * Display the specified resource.
	 * GET /faculty/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//return View::make('fauclty.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /faculty/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$fac = Faculty::find($id);
		return View::make('faculty.form',compact('fac'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /faculty/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$faculty = Faculty::find($id);
		$user = User::where('username', '=', $faculty->id_number)->first();
		if($input['password'] == $input['password2'])
			$user->password = Hash::make($input['password']);
		else
			return Redirect::intended('/faculty');
		$faculty->last_name = $input['last_name'];
		$faculty->first_name = $input['first_name'];
		$faculty->mi = $input['mi'];
		$faculty->id_number = $input['id_number'];
		$user->username = $input['id_number'];
		//$user->role = "FACULTY";
		$user->save();
		$faculty->save();
		return Redirect::action("SuperUserController@index");
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /faculty/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$faculty = Faculty::find($id);
		$user = User::where('username', '=', $faculty->id_number)->first()->delete();
		$faculty->delete();
		return Redirect::action('FacultyController@index');
	}

}