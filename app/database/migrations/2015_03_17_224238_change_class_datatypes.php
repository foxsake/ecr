<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeClassDatatypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::table('class', function(Blueprint $table)
		{
			
		});*/
		DB::statement('alter table class modify column passing tinyint');
		DB::statement('alter table class modify column type tinyint');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('alter table class modify column passing int');
		DB::statement('alter table class modify column type varchar(20)');
	}

}
