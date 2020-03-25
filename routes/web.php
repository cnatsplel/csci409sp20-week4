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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
    return '/ route';
});

Route::get('/hotels', 'HotelController@index');

Route::group(['prefix' => 'dashboard'], function() {
    Route::get('/', function () {
        return '/dashboard route';
    });

    Route::get('reservations/create/{id}', 'ReservationController@create');
});

Route::resource('reservations', 'ReservationController', ['except' => ['create', 'read', 'update', 'delete']]);
