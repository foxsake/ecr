<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCommentAndDateToGrade extends Migration {

	/**
	 * Run the migrations.
	 *disregard the date!
	 * @return void
	 */
	public function up()
	{
		Schema::table('grade', function(Blueprint $table)
		{
			$table->string('comment');
			//$table->date('date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grade', function(Blueprint $table)
		{
			$table->dropColumn('comment');
			//$table->dropColumn('date');
		});
	}

}
