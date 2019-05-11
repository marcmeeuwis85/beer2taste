<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBeerIdToBeerTastingResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beer_tasting_results', function (Blueprint $table) {
            $table->integer('beer_id')->unsigned();
            $table->foreign('beer_id')->references('id')->on('beers')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beer_tasting_results', function (Blueprint $table) {
            $table->dropColumn('beer_id');
        });
    }
}
