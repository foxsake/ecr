<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFacultyIdNumberToClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('class', function(Blueprint $table)
		{
			$table->string('faculty_id_number',20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('class', function(Blueprint $table)
		{
			$table->dropColumn('faculty_id_number');
		});
	}

}
