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
            $table->string('icao', 4);
            $table->string('iata', 3);
            $table->string('name', 255);
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->integer('altitude');
            $table->integer('max_flights_per_hour');
            $table->integer('country_id')->unsigned();
            $table->decimal('demand_bonus');
            $table->decimal('delay_factor');
            $table->string('time_zone', 255);
            $table->decimal('allocated_demand');
            $table->boolean('slot_controlled');
            //the longest runway now, may be a separate table later
            $table->integer('runways');
            $table->timestamps();
            #foreign

        });

        Schema::table('airports', function($table){

            $table->foreign('country_id')->references('id')->on('countries');
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
