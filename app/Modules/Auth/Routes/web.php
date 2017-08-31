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

Route::group(['prefix' => 'auth'], function () {


    /*Route::get('/', function () {
        dd('This is the Auth module index page. Build something great!');
    });*/
});

    Route::group(['prefix' => 'registration'], function () {
    Route::get('/', 'RegistrationController@index')->name('registration');
    Route::get('/create', 'RegisterController@create')->name('registration_create');
    Route::post('/store', 'RegisterController@store')->name('registration_store');
    Route::get('/edit/{id}', 'RegistrationController@edit')->name('Registration_edit');
    Route::get('/show/{id}', 'RegistrationController@show')->name('Registration_show');
    Route::post('/update', 'RegistrationController@update')->name('Registration_update');
    Route::get('/delete/{id}', 'RegistrationController@delete')->name('Registration_delete');
    Route::get('/verify/{id}/{code}', 'RegistrationController@activate')->name('Registration_activate');
});


    Route::group(['prefix' => 'login'], function () {
    Route::get('/', 'LoginController@index')->name('login');
    Route::get('/create', 'LoginController@create')->name('login_create');
    Route::post('/store', 'LoginController@login')->name('login');
    Route::post('/logout', 'RegistrationController@logout')->name('login');
    Route::get('/show/{id}', 'RegistrationController@show')->name('Registration_show');
    Route::post('/update', 'RegistrationController@update')->name('Registration_update');
    Route::get('/delete/{id}', 'RegistrationController@delete')->name('Registration_delete');
    Route::get('/verify/{id}/{code}', 'RegistrationController@activate')->name('Registration_activate');
});