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
			$table->increments('id');
			$table->string('category');
			$table->integer('percentage')->unsigned();
			$table->string('subject_code');
			$table->timestamps();
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
