<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('beer_tasting_persons', function(Blueprint $table) {
			$table->foreign('beer_tasting_id')->references('id')->on('beer_tastings')
						->onDelete('restrict')
						->onUpdate('no action');
		});
		Schema::table('beer_tasting_persons', function(Blueprint $table) {
			$table->foreign('person_id')->references('id')->on('persons')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('beer_tasting_beers', function(Blueprint $table) {
			$table->foreign('beer_tasting_id')->references('id')->on('beer_tastings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('beer_tasting_beers', function(Blueprint $table) {
			$table->foreign('beer_id')->references('id')->on('beers')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('beer_tasting_questions', function(Blueprint $table) {
			$table->foreign('beer_tasting_id')->references('id')->on('beer_tastings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('beer_tasting_questions', function(Blueprint $table) {
			$table->foreign('question_id')->references('id')->on('questions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('beer_tasting_results', function(Blueprint $table) {
			$table->foreign('beer_tasting_id')->references('id')->on('beer_tastings')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('beer_tasting_results', function(Blueprint $table) {
			$table->foreign('person_id')->references('id')->on('persons')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('beer_tasting_results', function(Blueprint $table) {
			$table->foreign('question_id')->references('id')->on('questions')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('beer_tasting_persons', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_persons_beer_tasting_id_foreign');
		});
		Schema::table('beer_tasting_persons', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_persons_person_id_foreign');
		});
		Schema::table('beer_tasting_beers', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_beers_beer_tasting_id_foreign');
		});
		Schema::table('beer_tasting_beers', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_beers_beer_id_foreign');
		});
		Schema::table('beer_tasting_questions', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_questions_beer_tasting_id_foreign');
		});
		Schema::table('beer_tasting_questions', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_questions_question_id_foreign');
		});
		Schema::table('beer_tasting_results', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_results_beer_tasting_id_foreign');
		});
		Schema::table('beer_tasting_results', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_results_person_id_foreign');
		});
		Schema::table('beer_tasting_results', function(Blueprint $table) {
			$table->dropForeign('beer_tasting_results_question_id_foreign');
		});
	}
}