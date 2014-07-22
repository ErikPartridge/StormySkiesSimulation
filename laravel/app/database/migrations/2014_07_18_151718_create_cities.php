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
		Schema::connection('world_one')->create('cities', function($table){
           $table->increments('id');
           $table->decimal('latitude');
           $table->decimal('longitude');
           $table->string('country')->references('iso')->on('countries');
           $table->string('region')->references('name')->on('regions');
           $table->integer('population');
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
		Schema::connection('world_one')->drop('cities');
	}

}
