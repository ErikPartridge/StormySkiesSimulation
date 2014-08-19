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

// Update = post, otherwise is get, {id} is a generic variable, specifying the database id for the item

Route::get('/backend/enter_world/{id}', "BackendController@enterWorld");

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

Route::post('/backend/aircraft/{id}', "BackendController@aircraftDetailsUpdate");

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

Route::get('/backend/edit_routes/{id}', "BackendController@editRoute");

Route::post('/backend/edit_routes/{id}', "BackendController@editRouteUpdate");

Route::get('/backend/research_routes', "BackendController@researchRoute");

Route::post('/backend/research_routes', "BackendController@researchRouteUpdate");

Route::get('/backend/airports', "BackendController@airports");

Route::post('/backend/airports', "BackendController@airportsUpdate");

Route::get('/backend/gates', "BackendController@listGates");

Route::post('/backend/gates', "BackendController@listGates");

Route::get('/backend/gates/{id}', "BackendController@gates");

Route::post('/backend/gates/{id}', "BackendController@gatesUpdate");

Route::get('/backend/slots', "BackendController@slotsRedirect");

Route::post('/backend/slots', "BackendController@slotsRedirect");

Route::get('/backend/slots/{id}', "BackendController@slots");

Route::post('/backend/slots/{id}', "BackendController@slotsUpdate");

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
//the link to join a world
Route::post('/backend/join_world/{id}', "BackendController@joinWorldSubmit");

Route::post('/user/code/{id}', "UserController@checkCode");

Route::get('/user/code/{id}', "UserController@checkCode");

Route::get('/terms', function(){
    return View::make('terms');
});

Route::get('/pricing', function(){
   return View::make('prices');
});
Route::get('/fun', function(){
   return View::make('fun');
});
Route::get('/educational', function(){
   return View::make('educational');
});
Route::get('/about', function(){
   return View::make('about');
});
Route::get('/features', function(){
   return View::make('features');
});
Route::get('/privacy', function(){
	return View::make('privacy');
});

Route::get('/faq', function(){
	return View::make('faq');
});
