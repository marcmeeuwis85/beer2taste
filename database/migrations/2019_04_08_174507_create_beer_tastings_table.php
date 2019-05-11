<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeerTastingsTable extends Migration {

	public function up()
	{
		Schema::create('beer_tastings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100);
			$table->string('hash', 200)->unique();
			$table->string('status', 25);
		});
	}

	public function down()
	{
		Schema::drop('beer_tastings');
	}
}