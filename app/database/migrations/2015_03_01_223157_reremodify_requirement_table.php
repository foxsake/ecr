<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReremodifyRequirementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requirement', function(Blueprint $table)
		{
			$table->string('created_by');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('requirement', function(Blueprint $table)
		{
			$table->dropColumn('created_by');
		});
	}

}
