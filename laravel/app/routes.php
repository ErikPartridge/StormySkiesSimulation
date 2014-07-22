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

Route::get('/backend/routes', "RoutesController@mainGet");

Route::post('/backend/routes', "RoutesController@mainPost");

Route::get('/backend/create_route', "RoutesController@createGet");

Route::post('/backend/create_route', "RoutesController@createPost");

Route::get('/backend/edit_routes', "RoutesController@editGet");

Route::post('/backend/edit_routes', "RoutesController@editPost");

Route::get('/backend/research_route', "RoutesController@researchGet");

Route::post('/backend/research_route', "RoutesController@researchPost");

Route::get('/backend/airports', "AirportsController@mainGet");

Route::post('/backend/airports', "AirportsController@mainPost");

Route::get('/backend/gates', "AirportsController@gatesGet");

Route::post('/backend/gates', "AirportsController@gatesPost");

Route::get('/backend/slots', "AirportsController@slotsGet");

Route::post('/backend/slots', "AirportsController@slotsPost");

Route::get('/backend/global', "BackendController@overviewGet");

Route::post('/backend/global', "BackendController@overviewPost");

Route::get('/user/login', "UserController@getLogin");

Route::post('/user/login', "UserController@postLogin");

Route::get('/user/logoff', "UserController@getLogoff");

Route::post('/user/logoff', "UserController@postLogoff");

Route::get('/user/settings', "UserController@getSettings");

Route::post('/user/settings', "UserController@postSettings");

Route::get('/user/payment', "UserController@getPayment");

Route::post('/user/payment', "UserController@postPayment");

Route::post('/user/register', "UserController@postRegister");

Route::get('/user/register', "UserController@getRegister");

Route::get('/terms', function(){
    return View::make('terms');
});

Route::get('/prices', function(){
   return View::make('prices');
});
