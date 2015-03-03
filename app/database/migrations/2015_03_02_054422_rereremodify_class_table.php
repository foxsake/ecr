<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RereremodifyClassTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('class', function(Blueprint $table)
		{
			$table->integer('requirement_id');
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
