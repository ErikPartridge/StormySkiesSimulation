<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('gates', function($table){
            $table->increments('id');
            $table->string('airport')->references('icao')->on('airports');
            $table->string('owner')->references('iceo')->on('airlines');
            $table->integer('number');
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
		Schema::connection('world_one')->drop('gates');
	}

}
