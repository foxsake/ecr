<?php

class Grader{

	public static function computeRaw($g){
		$grade = $g;
		$activity = Activity::find($grade->act_id);
		$category = Category::find($activity->category_id);
		$reqid = $category->requirement_id;

		//grading vars
		$total = 0;

		$categs = Category::where('requirement_id','=',$reqid)->get();

		foreach ($categs as $categ) {
			$catacts = Activity::where('category_id','=',$categ->id)->get();
			$count = 0;
			$sum = 0;
			foreach ($catacts as $catact) {
				$grd = Grade::where('act_id','=',$catact->id)
				->where('id_number','=',$grade->id_number)
				->first();
				$sum+= $grd->score;
				$count++;
			}
			//dd((float)$categ->percentage/100.0);
			if($count!=0)
				$total+= (($sum / ($count * $catact->max_score))* 100) * ((float)$categ->percentage/100.0);
		}
		//dd($total);
		return $total;
	}

	public static function computeWithLab($g){
		//$lec = computeRaw($g);
		//$lec = $lec * 0.67;
		//$lab *= 0.33;
	}
}