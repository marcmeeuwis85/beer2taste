<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeerTastingQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('beer_tasting_questions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('beer_tasting_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->integer('position')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('beer_tasting_questions');
	}
}