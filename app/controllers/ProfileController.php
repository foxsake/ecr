<?php

class ProfileController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /profile
	 *
	 * @return Response
	 */
	public function index()
	{
		switch (Auth::user()->role) {
			case '1':
				return View::make('profile.form',compact('fac'));
				break;
			case '2':
				$fac = Faculty::where('id_number','=',Auth::user()->username)->first();
				return View::make('profile.form',compact('fac'));
				break;
			case '3':
				$fac = Faculty::where('id_number','=',Auth::user()->username)->first();
				return View::make('profile.form',compact('fac'));
				break;
			
			default:
				# code...
				break;
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /profile/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /profile
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		$user = User::where('username', '=', Auth::user()->username)->first();
		if($input['password']!=''&&$input['password2']!=''){
		if($input['password'] == $input['password2'])
			$user->password = Hash::make($input['password']);
		else
			return Redirect::action('ProfileController@index');
		}else{
			if(Auth::user()->role == '1')
				return Redirect::action('ProfileController@index');
		}
		if($user->role!='1'){
			$faculty = Faculty::where('id_number','=',Auth::user()->username)->first();
			$faculty->last_name = $input['last_name'];
			$faculty->first_name = $input['first_name'];
			$faculty->mi = $input['mi'];
			$faculty->save();
		}
		$user->save();
		//$faculty->id_number = $input['id_number'];
		//$user->username = $input['id_number'];
		//$user->role = "FACULTY";
		return Redirect::action('HomeController@index');
	}

	/**
	 * Display the specified resource.
	 * GET /profile/{id}
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
	 * GET /profile/{id}/edit
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
	 * PUT /profile/{id}
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
	 * DELETE /profile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}