<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUntappedColumnsToBeers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beers', function (Blueprint $table) {
            $table->integer('untapped_id')->unsigned()->unique()->nullable();
            $table->integer('untapped_brewery_id')->unsigned()->nullable();
            $table->string('brewery_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beers', function (Blueprint $table) {
            $table->removeColumn('untapped_id');
            $table->removeColumn('untapped_brewery_id');
            $table->removeColumn('brewery_name');
            //
        });
    }
}
