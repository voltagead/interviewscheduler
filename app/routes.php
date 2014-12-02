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

Route::get('day/{dayID}', 'AppController@showDay');

Route::get('timeslot/{timeslotID}', 'AppController@selectTimeslot');

Route::post('signup-complete', array(
	'before' => 'csrf',
	'uses' => 'AppController@handleSignup',
));


// Add an admin route
Route::get('admin/login', 'AdminController@login');
Route::post('admin/login', array(
	'before' => 'csrf',
	'uses' => 'AdminController@handleLogin',
));

Route::group( array( 'prefix' => 'admin', 'before' => 'user-admin' ), function() {
	Route::get('/', 'AdminController@adminHome');
	Route::get('day/{dayID}', 'AdminController@showDay');
	Route::get('logout', 'AdminController@logout');
});
