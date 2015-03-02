<?php

class RequirementController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /requirement
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /requirement/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$req = new Requirement();
		$req->created_for_class = Session::get('classid');
		$req->created_by = Auth::user()->username;
		$req->save();
		//dd($req->id);//set class requirement id to this// open new view..
		$c = Classes::find(Session::get('classid'));
		$c->requirement_id = $req->id;
		//return View::make('');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /requirement
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /requirement/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		Session::put('classid', $id);
		$cl = Classes::find($id);
		if(empty($cl->requirement_id)){
			$leads = DB::table('class')
        	->join('requirement', 'class.requirement_id', '=', 'requirement.id')
        	->where('class.catalogue_number','=',$cl->catalogue_number)
        	->orderBy('class.catalogue_number')
        	->get();
			return View::make('faculty.requirement.show',compact('leads'));
		}else{
			$leads = DB::table('requirement')
        	->leftJoin('category', function($join) use( &$cl)
        	{
            	$join->on('category.requirement_id', '=', 'category.id')
                	 ->where('requirement.id','=', $cl->requirement_id);
        	})
        	->orderBy('name')
        	->get();
        	return View::make('faculty.requirement.index',compact('leads'));
    	}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /requirement/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//$cs = Requirement::where('');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /requirement/{id}
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
	 * DELETE /requirement/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}