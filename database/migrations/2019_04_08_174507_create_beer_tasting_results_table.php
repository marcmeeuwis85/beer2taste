<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeerTastingResultsTable extends Migration {

	public function up()
	{
		Schema::create('beer_tasting_results', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('beer_tasting_id')->unsigned();
			$table->integer('person_id')->unsigned()->nullable();
			$table->integer('question_id')->unsigned();
			$table->text('answer')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('beer_tasting_results');
	}
}