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
			//$table->increments('id');
			$table->string('cla_catalogue_number');
			$table->string('cla_room');
			$table->string('cla_type');//lab or lec
			$table->string('cla_lec_subject_code');//null if nothing
			$table->string('cla_time');
			$table->string('cla_day');
			$table->string('cla_subject_code')->unique();
			$table->primary('cla_subject_code');
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
