<?php

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /student
	 *
	 * @return Response
	 */
	public function index()
	{
		$leads = Student::orderBy('last_name')->get();
		return View::make('admin.student.index',compact('leads'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /student/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.student.form');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /student
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		//$user = new User;
		$s = new Student;
		$s->last_name = $input['last_name'];
		$s->first_name = $input['first_name'];
		$s->mi = $input['mi'];
		$s->id_number = $input['id_number'];
		$s->section = $input['section'];
		//$user->username = $input['id_number'];
		//$user->role = "STUDENT";
		//$user->save();
		$s->save();
		return Redirect::action('StudentController@index');
	}

	/**
	 * Display the specified resource.
	 * GET /student/{id}
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
	 * GET /student/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$stud = Student::find($id);
		return View::make('admin.student.form',compact('stud'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /student/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$student = Student::find($id);
		$student->last_name = $input['last_name'];
		$student->first_name = $input['first_name'];
		$student->mi = $input['mi'];
		$student->id_number = $input['id_number'];
		$student->section = $input['section'];
		$student->save();
		return Redirect::action("StudentController@index");
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /student/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Student::find($id)->delete();
		return Redirect::action('StudentController@index');
	}

}