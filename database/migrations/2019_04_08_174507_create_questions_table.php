<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionsTable extends Migration {

	public function up()
	{
		Schema::create('questions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100)->unique();
			$table->string('type', 100);
			$table->integer('position');
			$table->json('possible_answers')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('questions');
	}
}