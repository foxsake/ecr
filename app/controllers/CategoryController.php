<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /category
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /category/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('faculty.category.form');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /category
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$c = new Category();
		$c->name = $input['name'];
		$c->save();
		return Redirect::route('requirement.show',Session::get('classid'));
	}

	/**
	 * Display the specified resource.
	 * GET /category/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//TODOo
		$leads = Category::where('requirement_id','=',$id)->get();
		Session::put('requirementid', $id);
		return View::make('faculty.category.show',compact('leads'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /category/{id}/edit
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
	 * PUT /category/{id}
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
	 * DELETE /category/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}