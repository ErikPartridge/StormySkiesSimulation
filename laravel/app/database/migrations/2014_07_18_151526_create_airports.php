<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirports extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('airports', function($table){
            $table->increments('id');
            $table->string('icao');
            $table->string('iata');
            $table->string('name');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->integer('altitude');
            $table->integer('max_flights_per_hour');
            $table->foreign('country')->refences('iso')->on('countries');
            $table->decimal('demand_bonus');
            $table->decimal('delay_factor');
            $table->string('time_zone');
            $table->decimal('allocated_demand');
            $table->boolean('slot_controlled');
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
        Schema::connection('world_one')->drop('airports');
	}

}
