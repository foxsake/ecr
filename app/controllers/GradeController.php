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
		$ros->subjpoint_grade = Grader::computePoint($cl->passing,$ros->subj_grade);

		$ros->save();
		//dd($ros->id." ".Session::get('classid')." ".$stud->id." ".$cl->subject_code);
		return Redirect::action('FacultyClassController@show',Session::get('classid'));
	}

	public function update2($id)
	{
		$scores = Input::get('scores');
		$cl = Classes::find(Session::get('classid'));
		$stud = Grade::join('roster','grade.id_number','=','roster.id_number')->join('student','student.id_number','=','roster.id_number')
		->where('roster.subject_code','=',$cl->subject_code)->where('grade.act_id','=',$id)->orderBy('student.last_name')->select('grade.id as gradeid','roster.id as rosid')->get();
		$inc = 0;
		foreach ($stud as $stude) {
			$sc = Grade::find($stude->gradeid);
			$ros = Roster::find($stude->rosid);
			$sc->score = $scores[$inc];
			$sc->save();
			$ros->subj_grade = Grader::computeWithLab($sc,Session::get('classid'));
			$ros->subjpoint_grade = Grader::computePoint($cl->passing,$ros->subj_grade);
			$ros->save();
			$inc++;
		}

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