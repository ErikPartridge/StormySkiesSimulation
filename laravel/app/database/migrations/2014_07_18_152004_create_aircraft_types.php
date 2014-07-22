<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAircraftTypes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('aircraft_types', function($table){
           $table->increments('id');
           $table->string('name');
           $table->integer('cruise_speed');
           $table->integer('minimum_runway');
           $table->string('icao');
           $table->integer('range');
           $table->integer('price');
           $table->integer('number_of_engines');
           $table->integer('max_seats');
           $table->integer('production_rate');
           $table->string('manufacturer');
           $table->integer('fuel_burn');
           $table->integer('mtow');
           $table->integer('mlw');
           $table->integer('oew');
           $table->integer('mzfw');
           $table->decimal('price_a');
           $table->decimal('price_b');
           $table->decimal('price_c');
           $table->integer('hours_a');
           $table->integer('hours_b');
           $table->integer('hours_c');
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
		Schema::connection('world_one')->drop('aircraft_types');
	}

}
