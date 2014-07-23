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
		Schema::create('airports', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->string('icao');
            $table->string('iata');
            $table->string('name');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->integer('altitude');
            $table->integer('max_flights_per_hour');
            $table->string('country');
            $table->decimal('demand_bonus');
            $table->decimal('delay_factor');
            $table->string('time_zone');
            $table->decimal('allocated_demand');
            $table->boolean('slot_controlled');
            $table->timestamps();
            #foreign
            $table->foreign('country')->references('iso')->on('countries');
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
        Schema::drop('airports');
	}

}
