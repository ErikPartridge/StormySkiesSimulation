<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCities extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function($table){
           $table->increments('id');
           $table->integer('world_id')->unsigned();
           $table->decimal('latitude');
           $table->decimal('longitude');
           $table->string('country');
           $table->string('region');
           $table->integer('population');
           $table->timestamps();
           #foreign
           $table->foreign('country')->references('iso')->on('countries');
           $table->foreign('region')->references('name')->on('regions');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}
