<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngines extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('engines', function($table){
           $table->increments('id');
           $table->integer('world_id')->unsigned();
           $table->decimal('sfc');
           $table->decimal('bph');
           $table->string('name');
           $table->string('manufacturer');

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
		Schema::drop('engines');
	}

}
