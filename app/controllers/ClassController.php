<?php

class ClassController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /class
	 *
	 * @return Response
	 */
	public function index()
	{
		$leads = DB::table('class')
        ->leftJoin('faculty', 'class.faculty_id_number', '=', 'faculty.id_number')
        ->select('class.id','class.subject_code','class.catalogue_number','class.room','class.day','class.time','class.type','class.lec_subject_code','faculty.last_name','faculty.first_name','faculty.mi')
        ->get();
		return View::make('admin.class.index',compact('leads'));
	}
	/**
	 * Show the form for creating a new resource.
	 * GET /class/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.class.form');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /class
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$s = new Classes;
		$s->subject_code = $input['subject_code'];
		$s->catalogue_number = $input['catalogue_number'];
		$s->room = $input['room'];
		$s->time = $input['time'];
		$s->day = $input['day'];
		$s->type = $input['type'];
		$s->lec_subject_code = $input['lec_subject_code'];
		$s->faculty_id_number = $input['faculty_id_number'];
		$s->save();
		return Redirect::action('ClassController@index');
	}

	/**
	 * Display the specified resource.
	 * GET /class/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$c = Classes::find($id);
		$leads = DB::table('student')
        ->join('roster', function($join) use( &$c)
        {
            $join->on('student.id_number', '=', 'roster.id_number')
                 ->where('roster.subject_code','=', $c->subject_code);
        })
        ->orderBy('last_name')
        ->get();
		return View::make('admin.class.show',compact('leads'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /class/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$stud = Classes::find($id);
		return View::make('admin.class.form',compact('stud'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /class/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$s = Classes::find($id);
		$s->subject_code = $input['subject_code'];
		$s->catalogue_number = $input['catalogue_number'];
		$s->room = $input['room'];
		$s->time = $input['time'];
		$s->day = $input['day'];
		$s->type = $input['type'];
		$s->lec_subject_code = $input['lec_subject_code'];
		$s->faculty_id_number = $input['faculty_id_number'];
		$s->save();
		return Redirect::action('ClassController@index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /class/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Classes::find($id)->delete();
		return Redirect::action('ClassController@index');
	}

}