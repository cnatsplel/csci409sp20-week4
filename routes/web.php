<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return '/route;';
});

Route::get('/', function() {
    return '/hotels route';
});

Route::prefix('reservations', function() {
    Route::get('/', function() {
        return 'Showing users homepage';
    });

    Route::get('reservations', function() {
        return 'Showing users reservations';
    });

    Route::get('reservations/new', function() {
        return 'Showing form to create reservations';
    });

    Route::get('reservations/{id}', function() {
        return 'Showing reservation id';
    });

    Route::get('reservation/{id}/edit', function() {
        return 'Showing edit form for reservation id';
    });

    Route::post('reservations', function() {
        return 'Creating reservation';
    });

    Route::put('resrvations/{id}', function() {
        return 'Updating reservation id';
    });

    Route::delete('reservations/{id}', function() {
        return 'Deleting reservation id';
    });
});
