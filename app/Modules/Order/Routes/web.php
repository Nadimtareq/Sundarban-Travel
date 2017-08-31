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

Route::group(['prefix' => 'order'], function () {

    Route::get('/', 'WebController@index')->name('order');
    Route::get('/create', 'WebController@create')->name('order_create');
    Route::post('/store', 'WebController@store')->name('order_store');
    Route::get('/show/{id}', 'WebController@show');
    Route::get('/edit/{id}', 'WebController@edit')->name('order_edit');
    Route::post('/update/{id}', 'WebController@update')->name('order_update');
    Route::get('/delete/{id}', 'WebController@delete')->name('order_delete');
    /*Route::get('/', function () {
        dd('This is the Order module index page. Build something great!');
    });*/
});

Route::group(['prefix' => 'order/pending'], function () {


    Route::get('/', 'PendingController@index')->name('order/pending');
    Route::get('/create', 'PendingController@create')->name('order/pending_create');
    Route::post('/store', 'PendingController@store')->name('order/pending_store');
	Route::get('/edit/{id}', 'PendingController@edit')->name('order/pending_edit');
	Route::get('/show/{id}', 'PendingController@show');
    Route::post('/update/{id}', 'PendingController@update')->name('order/pending_update');
    Route::get('/delete/{id}', 'PendingController@delete')->name('order/pending_delete');
   /* Route::get('/commonpack', 'WebController@commonpack')->name('commonpack');*/

    /*Route::get('/', function () {
        dd('This is the Order module index page. Build something great!');
    });*/
});
