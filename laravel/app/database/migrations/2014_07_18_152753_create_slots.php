<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlots extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('world_one')->create('slots', function($table){
            $table->increments('id');
            $table->integer('time');
            $table->foreign('airport')->references('icao')->on('airports');
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
		Schema::drop('slots');
	}

}
