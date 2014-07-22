<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirplanes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('airplanes', function($table){
            $table->increments('id');
            $table->string('registration');
            $table->foreign('engine')->references('name')->on('engines');
            $table->integer('fin');
            $table->decimal('age');
            $table->boolean('leased');
            $table->decimal('a_check');
            $table->decimal('b_check');
            $table->decimal('c_check');
            $table->decimal('hours');
            $table->foreign('type')->references('icao')->on('aircraft_types');
            $table->foreign('location')->references('icao')->on('airports');
            $table->integer('cycles');
            $table->foreign('owner')->references('icao')->on('airlines');
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
		Schema::drop('airplanes');
	}

}
