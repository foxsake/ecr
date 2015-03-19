<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeRequirementPercentageDatatype extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::table('requirement', function(Blueprint $table)
		{
			//
		});*/
		DB::statement("alter table requirement modify column percentage tinyint");
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement("alter table requirement modify column percentage int");
	}

}
