<?php

class Grader{
	
	/*comput the grade.*/
	public static function computeRaw($g){
		$grade = $g;
		$activity = Activity::find($grade->act_id);
		//$requirement = Requirement::find($activity->requirement_id);
		//$reqid = $category->requirement_id;

		//grading vars
		$total = 0.00;

		$categs = Requirement::where('requirement.class_id','=',Session::get('classid'))->get();
		//Requirement::join('category','category.id','=','requirement.category_id')
		//->where('requirement.class_id','=',Session::get('classid'))->get();

		foreach ($categs as $categ) {
			$catacts = Activity::where('requirement_id','=',$categ->id)->orderBy('name')->get();
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

	public static function computePoint($passing,$thegrade){
		if($thegrade < $passing)
			return 5.00;
		$jump = round((100 - $passing)/9,2)+0.01;
		$grd = array();
		$pjump = $passing;
		$pgrade;
		for($i=0; $i<9; $i++){
			array_push($grd, $pjump);
			$pjump += $jump;
		}
		$increm = 1.0;

		for($i=8; $i>=0; $i--){
			if($thegrade >= $grd[$i]){
				$pgrade = $increm;
				break;
			}
			$increm+=0.25;
		}
		return $pgrade;
	}

	public static function getAve($reqID,$stud_id_number){
		$categ = Requirement::find($reqID);
		$total = 0;
			$catacts = Activity::where('requirement_id','=',$reqID)->orderBy('name')->get();
			$sum = 0.00;
			$max = 0.00;

			foreach ($catacts as $catact) {
				$grd = Grade::where('act_id','=',$catact->id)
				->where('id_number','=',$stud_id_number)
				->first();
				$sum += $grd->score;
				$max += $catact->max_score;
			}

			if($max > 0){
				$comp = ($sum / $max) * 100.00;
				$total = $comp * ($categ->percentage/100.00);
			}
		return $total;
	}
}