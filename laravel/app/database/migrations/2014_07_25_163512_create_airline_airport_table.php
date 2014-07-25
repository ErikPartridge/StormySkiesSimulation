<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAirlineAirportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('airline_airport', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('airline_id')->unsigned()->index();
			$table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
			$table->integer('airport_id')->unsigned()->index();
			$table->foreign('airport_id')->references('id')->on('airports')->onDelete('cascade');
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
		Schema::drop('airline_airport');
	}

}
