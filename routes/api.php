<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->group(function () {

    Route::middleware('auth')->group(function () {

        Route::get('users', 'UserController@current')->name('users.current');
    
        Route::get('users', 'UserController@index')->name('users.index');
        Route::get('users/{user}', 'UserController@show')->name('users.show');
        Route::put('users/{user}', 'UserController@update')->name('users.update');
        Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    });

    Route::post('users', 'UserController@store')->name('users.store');
});

