<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoryidToActivityTalble extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activity', function(Blueprint $table)
		{
			$table->dropColumn('req_id');
			$table->integer('category_id');
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
			$table->dropColumn('category_id');
			$table->integer('req_id');
		});
	}

}
