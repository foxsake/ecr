<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student', function(Blueprint $table)
		{
			//$table->increments('id');
			//$table->timestamps();
			$table->string('stu_last_name');
		    $table->string('stu_first_name');
		    $table->string('stu_mi');
		    $table->string('stu_id_number')->unique();
		    $table->string('stu_section');
		    $table->primary('stu_id_number');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student');
	}

}
