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
		Schema::create('flights', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
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
            $table->integer('airplane_id')->unsigned();
            $table->string('route');
            $table->timestamps();

            $table->foreign('airplane_id')->references('id')->on('airplanes');
            $table->foreign('route')->references('flight_number')->on('routes');
            $table->foreign('world_id')->references('id')->on('worlds');

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
