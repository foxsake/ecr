<?php

class Grader{
	
	/*comput the grade.*/
	public static function computeRaw($g){
		$grade = $g;
		$activity = Activity::find($grade->act_id);
		$category = Category::find($activity->category_id);
		$reqid = $category->requirement_id;

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

	//ILOVEYOU MOST SWEETY!
	//think of a better algorithim. but this will do for now;)
	public static function computeWithLab($g,$cl){
		$lec = Grader::computeRaw($g);
		$cla = Classes::find($cl);
		$labcl = Classes::where('lec_subject_code','=',$cla->subject_code)->get();
		if($labcl->isEmpty()){
			return $lec;
		}else{
			$sql = "select * from roster where roster.id_number = '" . $g->id_number ."' and (";
			$cc = 0;
			foreach ($labcl as $labo) {
				if($cc > 0)
					$sql .= 'or';
				$sql .= " roster.subject_code = '".$labo->subject_code."' ";
				$cc++;
			}
			$sql .= ')';
			$laborat = DB::select($sql);
			$laborat = $laborat[0];
			$lab = $laborat->subj_grade;
			//percentage
			$lec *= 0.67;
			$lab *= 0.33;
		}
		return $lab + $lec;
	}
}