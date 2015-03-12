<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validator = Validator::make($input,array(
				'username' => 'required',
				'password' => 'required'
			));
		if($validator->fails()){
			return Redirect::route('login')->withErrors($validator)->withInput();
		}else{
			$attempt = Auth::attempt([
		    'username'=>$input['username'],
		    'password'=>$input['password']
			]);
			if($attempt){
		    	if(strcmp(Auth::user()->role,"super-user")==0) return Redirect::action('SuperUserController@index');
		    	else return Redirect::intended('/');
			}else{
				$warn = 'ID Number/Password wrong, or account does not exist.';
				return Redirect::route('login')->with('warn' , $warn)->withInput();
			}
		}
		return Redirect::route('login')->with('global','There was a problem logging you in.')->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * 
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::intended('/');
	}
}