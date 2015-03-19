<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeRosterAddtableSubjpointGrade extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roster', function(Blueprint $table)
		{
			$table->string('subjpoint_grade',20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roster', function(Blueprint $table)
		{
			$table->dropColumn('subjpoint_grade');
		});
	}

}
