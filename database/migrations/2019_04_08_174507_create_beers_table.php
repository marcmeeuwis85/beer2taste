<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeersTable extends Migration {

	public function up()
	{
		Schema::create('beers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 100)->unique();
			$table->string('image')->nullable();
			$table->text('content')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('beers');
	}
}