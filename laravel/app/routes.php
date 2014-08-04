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

Route::get('/backend/airplane/{id}', "BackendController@airplaneDetails");

Route::post('/backend/airplane/{id}', "BackendController@airplaneUpdate");

Route::get('/backend/corporate', "BackendController@corporateRedirect");

Route::post('/backend/corporate/{id}', "BackendController@corporateUpdate");

Route::get('/backend/corporate/{id}', "BackendController@corporate");

Route::get('/backend/airport/{id}', "BackendController@getAirport");

Route::post('/backend/airport/{id}', "BackendController@postAirport");

Route::get('/backend/overview', "BackendController@overview");

Route::post('/backend/overview', "BackendController@postOverview");

Route::get('/backend/aircraft', "BackendController@aircraft");

Route::post('/backend/aircraft', "BackendController@aircraftUpdate");

Route::get('/backend/my_fleet', "BackendController@myFleet");

Route::post('/backend/my_fleet', "BackendController@myFleetUpdate");

Route::get('/backend/aircrafttype/{id}', "BackendController@aircraftType");

Route::get('/backend/aircraft/{id}', "BackendController@aircraftDetails");

Route::get('/backend/lease_aircraft', "BackendController@leaseAircraft");

Route::post('/backend/lease_aircraft', "BackendController@leaseAircraftUpdate");

Route::get('/backend/used_aircraft', "BackendController@usedAircraft");

Route::post('/backend/used_aircraft', "BackendController@usedAircraftUpdate");

Route::get('/backend/new_aircraft', "BackendController@newAircraftRedirect");

Route::post('/backend/new_aircraft', "BackendController@newAircraftUpdateRedirect");

Route::get('/backend/routes', "BackendController@routes");

Route::post('/backend/routes', "BackendController@routesUpdate");

Route::get('/backend/create_route', "BackendController@createRoute");

Route::post('/backend/create_route', "BackendController@createRouteUpdate");

Route::get('/backend/edit_routes', "BackendController@editRoutes");

Route::post('/backend/edit_routes', "BackendController@editRoutesUpdate");

Route::get('/backend/research_routes', "BackendController@researchRoute");

Route::post('/backend/research_routes', "BackendController@researchRouteUpdate");

Route::get('/backend/airports', "BackendController@airports");

Route::post('/backend/airports', "BackendController@airportsUpdate");

Route::get('/backend/gates', "BackendController@gates");

Route::post('/backend/gates', "BackendController@gatesUpdate");

Route::get('/backend/slots', "BackendController@slots");

Route::post('/backend/slots', "BackendController@slotsUpdate");

Route::get('/backend/global', "BackendController@world");

Route::post('/backend/global', "BackendController@globalUpdate");

Route::get('/user/login_success', "UserController@loginSuccess");

Route::get('/user/login', "UserController@getLogin");

Route::post('/user/login', "UserController@postLogin");

Route::get('/user/logoff', "UserController@logoff");

Route::post('/user/logoff', "UserController@postLogoff");

Route::get('/user/settings', "UserController@settings");

Route::post('/user/settings', "UserController@settingsUpdate");

Route::get('/user/payment', "UserController@payment");

Route::post('/user/payment', "UserController@paymentUpdate");

Route::post('/user/register', "UserController@postRegister");

Route::get('/user/register', "UserController@getRegister");

Route::post('/home/button', "HomeController@processButton");

Route::get('/home/button', "HomeController@processButton");

Route::get('/user/success', "UserController@getSuccess");

Route::get('/user/forgot', "UserController@getForgot");

Route::post('/user/forgot', "UserController@postForgot");

Route::get('/user/activate', "UserController@getActivate");

Route::post('/user/activate', "UserController@postActivate");

Route::get('/login', "UserController@getLogin");

Route::get('/backend/airplane', "BackendController@airplaneRedirect");

Route::get('/backend/home', "BackendController@home");

Route::post('/backend/home', "BackendController@postHome");

Route::get('/backend/new_aircraft/{id}', "BackendController@newAircraft");

Route::post('/backend/new_aircraft/{id}', "BackendController@newAircraftUpdate");

Route::get('/backend/join_world/{id}', "BackendController@joinWorld");

Route::post('/backend/join_world/{id}', "BackendController@joinWorld");

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
