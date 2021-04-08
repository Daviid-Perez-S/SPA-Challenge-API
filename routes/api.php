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

Route::namespace('api')->group(function () {

    Route::middleware('auth')->group(function () {

        // Users routes
        Route::get('user', 'UserController@current')->name('users.current');
        Route::get('users', 'UserController@index')->name('users.index');
        Route::get('users/{user}', 'UserController@show')->name('users.show');
        Route::put('users/{user}', 'UserController@update')->name('users.update');
        Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    });

        // Episodes routes
        Route::get('episodes', 'EpisodeController@index')->name('episodes.index');

        // Characters routes
        Route::get('characters', 'CharacterController@index')->name('characters.index');
        Route::put('characters/{character}', 'CharacterController@update')->name('characters.update');

        // Locations routes
        Route::get('locations', 'LocationController@index')->name('locations.index');

        // Logout user
        Route::get('logout', 'AuthController@logout')->name('auth.logout');

    // Save a new user
    // Route::post('users', 'UserController@store')->name('users.store');

});

