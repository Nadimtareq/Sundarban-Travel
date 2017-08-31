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

Route::group(['prefix' => 'user'], function () {

	Route::get('/', 'UserController@index')->name('user');
	Route::get('/store', 'UserController@index')->name('user_reg');
	Route::get('/show', 'UserController@show')->name('user_show');
    /*Route::get('/', function () {
        dd('This is the User module index page. Build something great!');
    });*/
});

Route::group(['prefix' => 'pending'], function () {

	Route::get('/', 'PendingController@index')->name('pending');
	Route::get('/edit/{id}', 'PendingController@edit')->name('pending_edit');
    Route::get('/pend/{id}', 'PendingController@pending')->name('pending_pend');
    Route::post('/update/{id}', 'PendingController@update')->name('pending_update');
    Route::get('/delete/{id}', 'PendingController@delete')->name('pending_delete');

    /*Route::get('/', function () {
        dd('This is the User module index page. Build something great!');
    });*/
});

Route::group(['prefix' => 'confirmed'], function () {

	Route::get('/', 'ConfirmedController@index')->name('confirmed');
	/*Route::get('/store', 'UserController@index')->name('user_reg');*/
    Route::get('/confirm/{id}', 'ConfirmedController@confirm')->name('confirmed_confirm');
	Route::get('/edit/{id}', 'ConfirmedController@edit')->name('confirmed_edit');
    Route::post('/update/{id}', 'ConfirmedController@update')->name('confirmed_update');
    Route::get('/delete/{id}', 'ConfirmedController@delete')->name('confirmed_delete');

    /*Route::get('/', function () {
        dd('This is the User module index page. Build something great!');
    });*/
});


