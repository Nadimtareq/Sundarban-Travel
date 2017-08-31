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

Route::group(['prefix' => 'commonpack'], function () {

    Route::get('/', 'CommonController@index')->name('commonpack');
    Route::get('/create', 'CommonController@create')->name('commonpack_create');
    Route::post('/store', 'CommonController@store')->name('commonpack_store');
    Route::get('/edit/{id}', 'CommonController@edit')->name('commonpack_edit');
    Route::post('/update/{id}', 'CommonController@update')->name('commonpack_update');
    Route::get('/delete/{id}', 'CommonController@delete')->name('commonpack_delete');

   /* Route::get('/', function () {
        dd('This is the Commonpack module index page. Build something great!');
    });*/
});

Route::group(['prefix' => 'commonpackge'], function () {

    Route::get('/', 'CommonpackgController@index')->name('commonpackge');
    Route::get('/create', 'CommonpackgController@create')->name('commonpackge_create');
    Route::post('/store', 'CommonpackgController@store')->name('commonpackge_store');
    Route::get('/edit/{id}', 'CommonpackgController@edit')->name('commonpackge_edit');
    Route::post('/update/{id}', 'CommonpackgController@update')->name('commonpackge_update');
    Route::get('/delete/{id}', 'CommonpackgController@delete')->name('commonpackge_delete');

   /* Route::get('/', function () {
        dd('This is the Commonpack module index page. Build something great!');
    });*/
});