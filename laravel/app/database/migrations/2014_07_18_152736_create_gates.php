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
            $table->foreign('airport')->references('icao')->on('airports');
            $table->foreign('owner')->references('iceo')->on('airlines');
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
		Schema::drop('gates');
	}

}
