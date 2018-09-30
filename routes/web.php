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

Route::get('/introphp', function () {
    return view('welcome');
});

Route::get('/home','Homecontroller@index');

Route::get('/reg-form','TicketController@show');

//Route::get('/test','TicketController@show');

//Route::get('/payment','RegController@index');

Route::post('/review','RegController@show');

Route::post('/submit','RegController@store');
