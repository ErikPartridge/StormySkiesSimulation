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
           $table->decimal('sfc');
           $table->decimal('bph');
           $table->string('name', 50);
           $table->string('manufacturer', 50);
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
