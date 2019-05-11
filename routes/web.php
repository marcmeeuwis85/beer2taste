<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('bierproeverij')->as('beer-tasting.')->group(function(){


    Route::get('/', 'BeerTastingController@index')->name('index');
    Route::get('nieuw', 'BeerTastingController@create')->name('create');
    Route::post('nieuw', 'BeerTastingController@store')->name('store');
    Route::get('/meedoen/{beerTasting}', 'BeerTastingController@join')->name('join');
    Route::post('/meedoen/{beerTasting}', 'BeerTastingController@addPerson')->name('addPerson');
    Route::get('/meedoen/{beerTasting}/{person}', 'BeerTastingController@start')->name('start');
    Route::get('/result/{beerTasting}', 'BeerTastingController@results')->name('results');

});

Route::prefix('bieren')->as('beers.')->group(function(){

    Route::get('/{beerTasting}/{person}/{beer}', 'BeerController@view')->name('view');
    Route::post('/{beerTasting}/{person}/{beer}', 'BeerController@submitAnswers')->name('submit-answers');

});