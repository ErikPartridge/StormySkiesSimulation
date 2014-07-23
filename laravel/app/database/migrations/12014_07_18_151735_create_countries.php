<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries', function($table){
           $table->increments('id');
           $table->integer('world_id')->unsigned();
           $table->string('iso');
           $table->string('name');
           $table->boolean('eu_member');
           $table->boolean('open_market');
           $table->timestamps();

           #foreign
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
		Schema::drop('countries');
	}

}
