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

Route::get('/', 'HomeController@showWelcome');

Route::get('/backend/corporate', "BackendController@corporate");

Route::post('/backend/corporate', "BackendController@corporateUpdate");

Route::get('/backend/overview', "BackendController@overview");

Route::post('/backend/overview', "BackendController@overviewUpdate");

Route::get('/backend/aircraft', "BackendController@aircraft");

Route::post('/backend/aircraft', "BackendController@aircraftUpdate");

Route::get('/backend/my_fleet', "BackendController@myFleet");

Route::post('/backend/my_fleet', "BackendController@myFleetUpdate");

Route::get('/backend/lease_aircraft', "BackendController@leaseAircraft");

Route::post('/backend/lease_aircraft', "BackendController@leaseAircraftUpdate");

Route::get('/backend/used_aircraft', "BackendController@usedAircraft");

Route::post('/backend/used_aircraft', "BackendController@usedAircraftUpdate");

Route::get('/backend/new_aircraft', "BackendController@newAircraft");

Route::post('/backend/new_aircraft', "BackendController@newAircraftUpdate");

Route::get('/backend/routes', "BackendController@routes");

Route::post('/backend/routes', "BackendController@routesUpdate");

Route::get('/backend/create_route', "BackendController@createRoute");

Route::post('/backend/create_route', "BackendController@createRouteUpdate");

Route::get('/backend/edit_routes', "BackendController@editRoutes");

Route::post('/backend/edit_routes', "BackendController@editRoutesUpdate");

Route::get('/backend/research_route', "BackendController@researchRoute");

Route::post('/backend/research_route', "BackendController@researchRouteUpdate");

Route::get('/backend/airports', "BackendController@airports");

Route::post('/backend/airports', "BackendController@airportsUpdate");

Route::get('/backend/gates', "BackendController@gates");

Route::post('/backend/gates', "BackendController@gatesUpdate");

Route::get('/backend/slots', "BackendController@slots");

Route::post('/backend/slots', "BackendController@slotsUpdate");

Route::get('/backend/global', "BackendController@global");

Route::post('/backend/global', "BackendController@globalUpdate");

Route::get('/user/login', "UserController@getLogin");

Route::post('/user/login', "UserController@loginSubmit");

Route::get('/user/logoff', "UserController@logoff");

Route::post('/user/logoff', "UserController@logoffSubmit");

Route::get('/user/settings', "UserController@settings");

Route::post('/user/settings', "UserController@settingsUpdate");

Route::get('/user/payment', "UserController@payment");

Route::post('/user/payment', "UserController@paymentUpdate");

Route::post('/user/register', "UserController@postRegister");

Route::get('/user/register', "UserController@getRegister");

Route::post('/home/button', "HomeController@processButton");

Route::get('/home/button', "HomeController@processButton");

Route::get('/user/success', "UserController@getSuccess");

Route::get('/terms', function(){
    return View::make('terms');
});

Route::get('/prices', function(){
   return View::make('prices');
});

Route::get('/privacy', function(){
	return View::make('privacy');
});

Route::get('/faq', function(){
	return View::make('faq');
});
