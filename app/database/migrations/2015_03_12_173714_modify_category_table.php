<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('category', function(Blueprint $table)
		{
			$table->dropColumn('percentage');
			$table->dropColumn('requirement_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('category', function(Blueprint $table)
		{
			$table->integer('percentage');
			$table->integer('requirement_id');
		});
	}

}
