<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'frontend'], function () {

	 Route::get('/', 'WebController@index')->name('frontend');
	  Route::post('/', 'WebController@store')->name('f_store');
	   Route::get('/visit', 'WebController@visit')->name('frontend_visit');
    // Route::get('/', function () {
    //     dd('This is the Frontend module index page. Build something great!');
    // });
});
