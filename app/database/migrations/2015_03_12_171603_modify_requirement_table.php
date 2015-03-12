<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyRequirementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requirement', function(Blueprint $table)
		{
			$table->dropColumn('created_for_class');
			$table->dropColumn('created_by');
			$table->integer('category_id');
			$table->integer('percentage');
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
		Schema::table('requirement', function(Blueprint $table)
		{
			$table->integer('created_for_class');
			$table->string('creeted_by');
			$table->dropColumn('category_id');
			$table->dropColumn('percentage');
			$table->dropColumn('class_id');
		});
	}

}
