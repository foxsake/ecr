<?php

class Grader{
	/*comput the grade.*/
	public static function computeRaw($g){
		$grade = $g;
		$activity = Activity::find($grade->act_id);
		$category = Category::find($activity->category_id);
		$reqid = $category->requirement_id;
		$print = '';
		$print2 = '';
		//grading vars
		$total = 0.00;

		$categs = Category::where('requirement_id','=',$reqid)->get();

		foreach ($categs as $categ) {
			$catacts = Activity::where('category_id','=',$categ->id)->orderBy('name')->get();
			$sum = 0.00;
			$max = 0.00;

			foreach ($catacts as $catact) {
				$grd = Grade::where('act_id','=',$catact->id)
				->where('id_number','=',$grade->id_number)
				->first();
				$sum += $grd->score;
				$max += $catact->max_score;
			}

			if($max > 0){
				$comp = ($sum / $max) * 100.00;
				$total += $comp * ($categ->percentage/100.00);
			}
			
		}
		return $total;
	}

	public static function computeWithLab($g,$cl){
		$lec = Grader::computeRaw($g);

		$cla = Classes::find($cl);
		$cla = Classes::join('roster','roster.subject_code','=','class.subject_code')
		->where('lec_subject_code','=',$cla->subject_code)
		->where('roster.id_number','=',$g->id_number)->first();
		//$ros = Roster::where('subject_code','=',$cla->subject_code)->where('id_number','=',)->first();
		$lab = $cla->grade;
		$lec *= 0.67;
		$lab *= 0.33;
		dd($cla->grade);
		return $lab + $lec;
	}
}