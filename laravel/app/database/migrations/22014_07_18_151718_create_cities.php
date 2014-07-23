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
           $table->integer('country_id')->unsigned();
           $table->string('region', 255);
           $table->integer('population');
           $table->timestamps();
           #foreign
           $table->foreign('country_id')->references('id')->on('countries');
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
