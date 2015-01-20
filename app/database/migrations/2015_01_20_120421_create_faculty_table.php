<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faculty', function(Blueprint $table)
		{
			//$table->increments('id');
			//$table->timestamps();
			$table->string('fac_designation');
			$table->string('fac_role');
			$table->string('fac_last_name');
			$table->string('fac_first_name');
			$table->string('fac_mi');
			$table->string('fac_id_number')->unique();
			$table->primary('fac_id_number');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faculty');
	}

}
