<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirportArriveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airport_arrive', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('airport_id')->unsigned()->index();
			$table->foreign('airport_id')->references('id')->on('airports');
			$table->integer('arrive_id')->unsigned()->index();
			$table->foreign('arrive_id')->references('id')->on('routes');
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
		Schema::drop('airport_arrive');
	}

}
