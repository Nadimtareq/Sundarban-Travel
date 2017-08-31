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

Route::group(['prefix' => 'package'], function () {


	Route::get('/', 'PackageController@index')->name('package');
    Route::get('/create', 'PackageController@create')->name('package_create');
    Route::post('/store', 'PackageController@store')->name('package_store');
    Route::get('/edit/{id}', 'PackageController@edit')->name('package_edit');
    Route::post('/update/{id}', 'PackageController@update')->name('package_update');
    Route::get('/delete/{id}', 'PackageController@delete')->name('package_delete');


   /* Route::get('/', function () {
        dd('This is the Package module index page. Build something great!');
    });*/
});


Route::group(['prefix' => 'assign'], function () {


	Route::get('/', 'AssignController@index')->name('assign');
    Route::get('/create', 'AssignController@create')->name('assign_create');
    Route::post('/store', 'AssignController@store')->name('assign_store');
    Route::get('/edit/{id}', 'AssignController@edit')->name('assign_edit');
    Route::post('/update/{id}', 'AssignController@update')->name('assign_update');
    Route::get('/delete/{id}', 'AssignController@delete')->name('assign_delete');

    
   /* Route::get('/', function () {
        dd('This is the Package module index page. Build something great!');
    });*/
});