<?php

class ActivityController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /activity
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /activity/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$categ = Requirement::join('category','category.id','=','requirement.category_id')
		->where('requirement.class_id','=',Session::get('classid'))->select('category.name as rname','requirement.id as rid')
		->orderBy('category.name')->lists('rname','rid');
		return View::make('faculty.activity.form')->with('categ',$categ);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /activity
	 *
	 * @return Response
	 */
	public function store()
	{
		$act = new Activity();
		$input = Input::all();
		$act->name = $input['name'];
		$act->max_score = $input["max_score"];
		$act->term = $input['term'];
		$act->requirement_id = $input['requirement_id'];
		$act->class_id = Session::get('classid');
		$act->date = $input['date'];
		$act->save();

		$cl = Classes::find(Session::get('classid'));//refactor later!!!!
		$studs = DB::table('roster')
        	->join('student', function($join) use(&$cl)
        	{
            	$join->on('roster.id_number', '=', 'student.id_number')
               		 ->where('roster.subject_code','=', $cl->subject_code);
        	})
        		->orderBy('last_name')
        		->get();

        foreach ($studs as $stud) {
        	$gr = new Grade();
        	$gr->id_number = $stud->id_number;
        	$gr->act_id = $act->id;
        	$gr->score = $input['score'];
        	$gr->save();
        	Grader::computeWithLab($gr);//here
        }
		return Redirect::action('FacultyClassController@show',Session::get('classid'));
	}

	/**
	 * Display the specified resource.
	 * GET /activity/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$act = Activity::find($id);
		$categ = Requirement::join('category','category.id','=','requirement.category_id')
		->where('requirement.class_id','=',Session::get('classid'))->select('category.name as rname','requirement.id as rid')
		->orderBy('category.name')->lists('rname','rid');
		$cl = Classes::find(Session::get('classid'));

		$stud = Roster::join('grade','grade.id_number','=','roster.id_number')->join('student','student.id_number','=','roster.id_number')
		->where('roster.subject_code','=',$cl->subject_code)->where('grade.act_id','=',$id)->orderBy('student.last_name')
		->select(DB::raw('CONCAT(last_name,", ", first_name," ", mi,".") as name'),'score')->get();
		//dd($stud);
		return View::make('faculty.activity.show',compact('act','categ','stud'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /activity/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$stud = Activity::find($id);
		return View::make('faculty.activity.form',compact('stud'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /activity/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$act = Activity::find($id);
		$act->name = $input['name'];
		$act->max_score = $input["max_score"];
		$act->term = $input['term'];
		$act->requirement_id = $input['requirement_id'];
		$act->date = $input['date'];
		$act->save();
		return Redirect::action('FacultyClassController@show',Session::get('classid'));
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /activity/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Activity::find($id)->delete();
		return Redirect::action('ActivityController@index');
	}
}