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

   Route::group(['prefix' => 'groupfare'], function () {

	Route::get('/', 'PackageController@index')->name('groupfare');
    Route::get('/create', 'PackageController@create')->name('groupfare_create');
    Route::post('/store', 'PackageController@store')->name('groupfare_store');
     Route::get('/edit/{id}', 'PackageController@edit')->name('groupfare_edit');
    Route::post('/update/{id}', 'PackageController@update')->name('groupfare_update');
    Route::get('/delete/{id}', 'PackageController@delete')->name('groupfare_delete');
    /*Route::get('/', function () {
        dd('This is the Specialpackage module index page. Build something great!');
    });*/
});

Route::group(['prefix' => 'groupfare/cat'], function () {

    Route::get('/', 'GroupcatController@index')->name('groupfare/cat');
    Route::get('/create', 'GroupcatController@create')->name('groupfare/cat_create');
    Route::post('/store', 'GroupcatController@store')->name('groupfare/cat_store');
     Route::get('/edit/{id}', 'GroupcatController@edit')->name('groupfare/cat_edit');
    Route::post('/update/{id}', 'GroupcatController@update')->name('groupfare/cat_update');
    Route::get('/delete/{id}', 'GroupcatController@delete')->name('groupfare/cat_delete');
    /*Route::get('/', function () {
        dd('This is the Specialpackage module index page. Build something great!');
    });*/
});
