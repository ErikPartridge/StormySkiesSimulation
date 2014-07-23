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
		Schema::create('airplanes', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->string('registration');
            $table->string('engine');
            $table->integer('fin');
            $table->decimal('age');
            $table->boolean('leased');
            $table->decimal('a_check');
            $table->decimal('b_check');
            $table->decimal('c_check');
            $table->decimal('hours');
            $table->string('type');
            $table->string('location');
            $table->integer('cycles');
            $table->string('owner');
            $table->timestamps();

            $table->foreign('type')->references('icao')->on('aircraft_types');
            $table->foreign('location')->references('icao')->on('airports');
            $table->foreign('owner')->references('icao')->on('airlines');
            $table->foreign('world_id')->references('id')->on('worlds');
            $table->foreign('engine')->references('name')->on('engines');

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
