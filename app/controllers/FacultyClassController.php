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
			//todo
		}else{
			/*$leads = DB::table('roster')
        	->join('student', function($join) use(&$cl)
        	{
            	$join->on('roster.id_number', '=', 'student.id_number')
               		 ->where('roster.subject_code','=', $cl->subject_code);
        	})

        	->join('grade as g1', function($join) use(&$cl)
        	{
            	$join->on('g1.id_number', '=', 'student.id_number')
               		 ->where('g1.act_id','=', '4');
        	})
        	->join('grade as g2', function($join) use(&$cl)
        	{
            	$join->on('g2.id_number', '=', 'student.id_number')
               		 ->where('g2.act_id','=', '5');
        	})
        	->join('grade as g3', function($join) use(&$cl)
        	{
            	$join->on('g3.id_number', '=', 'student.id_number')
               		 ->where('g3.act_id','=', '6');
        	})

        	->select('g3.score as s3', 'g2.score as s2', 'g1.score as s1', 'last_name', 'first_name', 'mi')
        	->orderBy('last_name')
        	->get();*/
        	$count = 1;
        	$sqls = 'select CONCAT(last_name,", ", first_name," ", mi,".") as name, roster.subj_grade';
        	$sqlj = '';
        	$sqln = ' from roster inner join student on roster.id_number = student.id_number and roster.subject_code = '.$cl->subject_code.' ';
        	$cats = Category::where('requirement_id','=', $cl->requirement_id)->orderBy('name')->get();
        	$actnames = array();

        	foreach ($cats as $cat) {
        		$acts = Activity::where('category_id','=',$cat->id)->orderBy('term')->get();
        		foreach ($acts as $act) {
        			$sqlj .= ' inner join grade as g'.$count.' on g'.$count.'.id_number = student.id_number and g'.$count.'.act_id = '.$act->id;
        			$sqls .= ', g'.$count.'.score as s'.$count.', g'.$count.'.id as s'.$count.'id';
        			array_push($actnames, array('name' => $act->name, 'max' => $act->max_score,'date' => $act->date));
        			$count++;
        		}
        	}
        	//New
        	if($cl->type = 'LEC'){
        		$sqlexx = ', labs.subj_grade as lab_grade';
        		$sqlex = ' left join roster as labs inner join class as cls on cls.subject_code = labs.subject_code on labs.id_number = roster.id_number and cls.lec_subject_code = '.$cl->subject_code.' ';
        		$sqlj .= $sqlex;
        		$sqls .= $sqlexx;
        	}

        	$sqls = $sqls.$sqln.$sqlj;
        	//dd($sqls.' order by last_name asc');
        	$leads = DB::select($sqls.' order by last_name asc');
        	//TODO
        	return View::make('faculty.class.show',compact('leads','cl','cats','actnames'));//bilang ng activities
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