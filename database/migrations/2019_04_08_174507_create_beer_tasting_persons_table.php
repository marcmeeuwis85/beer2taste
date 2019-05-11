<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeerTastingPersonsTable extends Migration {

	public function up()
	{
		Schema::create('beer_tasting_persons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('beer_tasting_id')->unsigned();
			$table->integer('person_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('beer_tasting_persons');
	}
}