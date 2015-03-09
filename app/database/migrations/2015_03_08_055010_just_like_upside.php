<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JustLikeUpside extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roster', function(Blueprint $table)
		{
			$table->decimal('subj_grade',6,2);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roster', function(Blueprint $table)
		{
			$table->dropColumn('subj_grade');
		});
	}

}
