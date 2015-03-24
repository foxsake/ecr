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
		//todo
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /requirement
	 *
	 * @return Response
	 */
	public function store()
	{
		$percentages = Input::get('percentages');
		$categories = Input::get('categories');

		foreach ($percentages as $key => $n) {
			$req = new Requirement();
			$req->class_id = Session::get('classid');
			$req->category_id = $categories[$key];
			$req->percentage = $percentages[$key];
			$req->save();
		}
		
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
		$stud = Classes::find($id);
		$thesum = Requirement::join('category','category.id','=','requirement.category_id')->where('requirement.class_id','=',$id)->sum('percentage');
		$leads = Requirement::join('category','category.id','=','requirement.category_id')->where('requirement.class_id','=',$id)->select('name','percentage')->get();
		if(!$leads->isEmpty() && $thesum == 100){
			return View::make('faculty.requirement.index',compact('leads','stud'));
		}else{
			$categ =  Category::orderBy('name')->lists('name','id');
			return View::make('faculty.requirement.show',compact('categ'));
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
		$leads = Requirement::join('category','category.id','=','requirement.category_id')->where('requirement.class_id','=',$id)->select('name','percentage')->get();
		$categ =  Category::orderBy('name')->lists('name','id');
		return View::make('faculty.requirement.show',compact('leads','categ'));
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
		Requirement::where('class_id','=',$id)->delete();
		Activity::where('class_id','=',$id)->delete();

		$percentages = Input::get('percentages');
		$categories = Input::get('categories');

		foreach ($percentages as $key => $n) {
			$req = new Requirement();
			$req->class_id = Session::get('classid');
			$req->category_id = $categories[$key];
			$req->percentage = $percentages[$key];
			$req->save();
		}
		
		return Redirect::route('requirement.show',Session::get('classid'));
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