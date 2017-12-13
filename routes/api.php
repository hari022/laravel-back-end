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

Route::get('events/{plan}', 'EventsController@getEvents');

Route::get('events/{plan}/{date}', 'EventsController@getEventsByDate');

Route::get('cart', 'CartController@getCart');

Route::post('cart/{id}', 'CartController@addToCart');

Route::delete('cart/{id}', 'CartController@deleteEvent'); 

Route::post('email', 'EmailController@sendEmail');




