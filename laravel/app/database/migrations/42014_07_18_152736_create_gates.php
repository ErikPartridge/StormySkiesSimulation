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
		Schema::create('gates', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->string('airport');
            $table->string('owner');
            $table->integer('number');
            $table->timestamps();

            $table->foreign('airport')->references('icao')->on('airports');
            $table->foreign('owner')->references('iceo')->on('airlines');
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
		Schema::drop('gates');
	}

}
