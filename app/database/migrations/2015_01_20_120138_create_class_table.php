<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('class', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('catalogue_number');
			$table->string('room');
			$table->string('type');//lab or lec
			$table->string('lec_subject_code');//null if nothing
			$table->string('time');
			$table->string('day');
			$table->string('subject_code')->unique();
			//$table->primary('subject_code');
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
		Schema::drop('class');
	}

}
