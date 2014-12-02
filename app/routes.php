<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Show the homepage
Route::get('/', 'AppController@showHome');

Route::get('/day/{dayID}', 'AppController@showDay');

Route::get('/timeslot/{timeslotID}', 'AppController@selectTimeslot');

