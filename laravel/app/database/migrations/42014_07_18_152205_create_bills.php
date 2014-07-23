<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBills extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills', function($table){
            $table->increments('id');
            $table->integer('world_id')->unsigned();
            $table->integer('pays')->unsigned();
            $table->string('to')->unsigned();
            $table->decimal('amount');
            $table->date('when');
            $table->timestamps();

            $table->foreign('pays')->references('id')->on('airlines');
            $table->foreign('to')->references('id')->on('airlines');
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
		Schema::drop('bills');
	}

}
