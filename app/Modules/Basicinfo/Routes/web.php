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

Route::group(['prefix' => 'basicinfo'], function () {

	Route::get('/', 'BasicController@index')->name('basicinfo');
    Route::get('/create', 'BasicController@create')->name('basicinfo_create');
    Route::post('/store/{id}', 'BasicController@store')->name('basicinfo_store');
    /*Route::get('/', function () {
        dd('This is the Basicinfo module index page. Build something great!');
    });*/
});
