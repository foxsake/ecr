<?php

class GradeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /grade
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /grade/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /grade
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /grade/{id}
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
	 * GET /grade/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$stud = Grade::find($id);
		$st = Student::where('id_number','=',$stud->id_number)->first();
		$act = Activity::find($stud->act_id);
		$cl = Classes::find(Session::get('classid'));
		return View::make('faculty.grade.form',compact('stud','st','act','cl'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /grade/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$stud = Grade::find($id);
		$input = Input::all();
		$stud->score = $input['score'];
		$stud->comment = $input['comment'];
		$stud->save();

		$cl = Classes::find(Session::get('classid'));

		$ros = Roster::where('id_number','=',$stud->id_number)
					->where('subject_code','=',$cl->subject_code)
					->first();

		//$ros->subj_grade = Grader::computeRaw($stud);
		$ros->subj_grade = Grader::computeWithLab($stud,Session::get('classid'));

		$ros->save();
		//dd($ros->id." ".Session::get('classid')." ".$stud->id." ".$cl->subject_code);
		return Redirect::action('FacultyClassController@show',Session::get('classid'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /grade/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}