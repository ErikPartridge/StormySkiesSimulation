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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/backend/corporate', "CorporateController@get");

Route::post('/backend/corporate', "CorporateController@post");

Route::get('/backend/overview', "OverviewController@get");

Route::post('/backend/overview', "OverviewController@post");

Route::get('/backend/aircraft', "AircraftController@mainGet");

Route::post('/backend/aircraft', "AircraftController@mainPost");

Route::get('/backend/my_fleet', "FleetController@get");

Route::post('/backend/my_fleet', "FleetController@post");

Route::get('/backend/lease_aircraft', "AircraftController@leasingGet");

Route::post('/backend/lease_aircraft', "AircraftController@leasingPost");

Route::get('/backend/used_aircraft', "AircraftController@usedGet");

Route::post('/backend/used_aircraft', "AircraftController@usedPost");

Route::get('/backend/new_aircraft', "AircraftController@newGet");

Route::post('/backend/new_aircraft', "AircraftController@newPost");
