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
		Schema::table('requirement', function(Blueprint $table)
		{
		    $table->integer('req_id')->unique();
			$table->string('req_category');
			$table->integer('req_percentage')->unsigned();
			$table->primary('req_id');
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
