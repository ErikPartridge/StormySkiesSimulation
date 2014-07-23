<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regions', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->string('name', 255);
            $table->timestamps();
        });
        Schema::table('regions', function($table){
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
		Schema::drop('regions');
	}

}
