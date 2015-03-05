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
		$cl = Classes::find(Session::get('classid'));
		$categ = Category::where('requirement_id','=',$cl->requirement_id)->orderBy('name')->lists('name','id');
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
		$act->category_id = $input['category_id'];
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
        }
		return Redirect::intended('/');
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
		//
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
		$act->category_id = $input['category_id'];
		$act->save();
		return Redirect::home('/');
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