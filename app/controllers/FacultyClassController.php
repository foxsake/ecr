<?php

class FacultyClassController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /facultyclass
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /facultyclass/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /facultyclass
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /facultyclass/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		Session::put('classid', $id);
		$cl = Classes::find($id);
		if(empty($cl->requirement_id)){
			//TODO
		}else{
			$leads = DB::table('roster')
        	->join('student', function($join) use(&$cl)
        	{
            	$join->on('roster.id_number', '=', 'student.id_number')
               		 ->where('roster.subject_code','=', $cl->subject_code);
        	})
        	//for($i = 0; $i<DB::table('category')->where('requirement_id','=',$cl->requirement_id)->count();$i++){
        		->join('category', function($join) use(&$cl)
        			{
            			$join->on('category.requirement_id', '=', $cl->requirement_id);
               		 	->where('category.subject_code','=', $cl->subject_code);
        			})
        	//}
        	->orderBy('last_name')
        	->get();
        	return View::make('faculty.class.show',compact('leads','cl'));
    	}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /facultyclass/{id}/edit
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
	 * PUT /facultyclass/{id}
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
	 * DELETE /facultyclass/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}