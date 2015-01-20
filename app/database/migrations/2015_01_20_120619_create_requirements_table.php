<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requirement', function(Blueprint $table)
		{
			//$table->increments('id');
			//$table->timestamps();
			$table->increments('req_id');
			//$table->integer('req_id')->unique();
			$table->string('req_category');
			$table->integer('req_percentage')->unsigned();
			$table->string('cla_subject_code');
			//$table->primary('req_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('requirement');
	}

}
