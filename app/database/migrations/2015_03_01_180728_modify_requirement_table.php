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
			$table->dropColumn(array('category','percentage','subject_code'));
			$table->integer('created_for_class');
			$table->integer('created_by');
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
			$table->string('category');
			$table->string('subject_code');
			$table->integer('percentage');
		});
	}

}
