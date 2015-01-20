<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grade', function(Blueprint $table)
		{
			//$table->increments('id');
			//$table->timestamps();
			$table->decimal('score',10,2);
			$table->string('stu_id_number');
			$table->integer('act_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grade');
	}

}
