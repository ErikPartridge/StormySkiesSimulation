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
		Schema::create('aircraft_types', function($table){
           $table->string('name');
           $table->integer('cruise_speed');
           $table->integer('minimum_runway');
           $table->string('icao');
           $table->integer('range');
           $table->integer('price');
           $table->integer('number_of_engines');
           $table->
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
