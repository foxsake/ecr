<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activity', function(Blueprint $table)
		{
			//$table->increments('id');
			$table->increments('act_id');
			$table->integer('act_req_id');
			$table->string('act_name');
			$table->decimal('act_max_score');
			$table->string('actt_term');
			$table->timestamps();
			//$table->primary('act_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activity');
	}

}
