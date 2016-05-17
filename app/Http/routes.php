<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'articles'], function () {
        Route::get('/', 'ArticlesController@index');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UsersController@index');
    });

    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', 'ProjectsController@index');
    });
});

Route::group(['prefix' => 'auth', 'middleware' => 'guest'], function () {
    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');

    Route::get('/registration', 'Auth\AuthController@getRegister');
    Route::post('/registration', 'Auth\AuthController@postRegister');
});