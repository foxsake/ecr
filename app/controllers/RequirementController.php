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
		$c->save();
		return Redirect::to('category/'.$req->id);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /requirement
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$req = new Requirement();
		$req->class_id = Session::get('classid');
		$req->percentage = $input['percentage'];
		$req->category_id = $input['category_id'];
		$req->save();
		return Redirect::route('requirement.show',Session::get('classid'));
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
		$thesum = Requirement::join('category','category.id','=','requirement.category_id')->where('requirement.class_id','=',$id)->sum('percentage');
		$leads = Requirement::join('category','category.id','=','requirement.category_id')->where('requirement.class_id','=',$id)->select('name','percentage')->get();
		if(!$leads->isEmpty() && $thesum == 100){
			return View::make('faculty.requirement.index',compact('leads'));
		}else{
			$categ =  Category::orderBy('name')->lists('name','id');
			return View::make('faculty.requirement.show',compact('leads','categ'));
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
		Requirement::find($id)->delete();
		return Redirect::route('requirement.show',Session::get('classid'));
	}

}