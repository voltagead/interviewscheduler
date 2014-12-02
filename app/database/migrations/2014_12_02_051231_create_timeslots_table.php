<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeslotsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timeslots', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('time');
			$table->integer('day_id')->unsigned();
			$table->boolean('available')->default(true);
			$table->string('name');
			$table->string('phone');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('timeslots');
	}

}
