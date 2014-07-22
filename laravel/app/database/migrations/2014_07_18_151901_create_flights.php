<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlights extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('flights', function($table){
            $table->increments('id');
            $table->integer('departs_gmt');
            $table->integer('arrives_gmt');
            $table->boolean('cancelled');
            $table->integer('economy');
            $table->integer('eco_plus');
            $table->integer('business');
            $table->integer('first');
            $table->date('date');
            $table->integer('fuel_burn');
            $table->integer('flying_time');
            $table->foreign('route')->references('flight_number')->on('routes');
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
		Schema::drop('flights');
	}

}
