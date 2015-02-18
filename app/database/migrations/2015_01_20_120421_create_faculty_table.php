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
			$table->increments('id');
			//$table->string('fac_designation');
			//$table->string('role');
			$table->string('last_name');
			$table->string('first_name');
			$table->string('mi');
			$table->string('id_number')->unique();
			//$table->primary('id_number');
			$table->timestamps();
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
