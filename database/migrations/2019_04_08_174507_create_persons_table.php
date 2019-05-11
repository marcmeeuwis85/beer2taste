<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonsTable extends Migration {

	public function up()
	{
		Schema::create('persons', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('email', 100)->unique();
			$table->string('name', 100)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('persons');
	}
}