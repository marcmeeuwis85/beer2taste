<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeerTastingBeersTable extends Migration {

	public function up()
	{
		Schema::create('beer_tasting_beers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('beer_tasting_id')->unsigned();
			$table->integer('beer_id')->unsigned();
            $table->integer('position')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('beer_tasting_beers');
	}
}