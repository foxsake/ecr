<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyActivityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activity', function(Blueprint $table)
		{
			$table->dropColumn('category_id');
			$table->integer('requirement_id');
			$table->integer('class_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('activity', function(Blueprint $table)
		{
			$table->integer('category_id');
			$table->dropColumn('requirement_id');
			$table->dropColumn('class_id');
		});
	}

}
