<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRequirementIdToClassTalble extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('class', function(Blueprint $table)
		{
			$table->string('requirement_id',20);
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
			$table->dropColumn('requirement_id');
		});
	}

}
