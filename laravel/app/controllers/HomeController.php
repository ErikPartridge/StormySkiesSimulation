<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$worlds = libraries\World::all();
		$worldList = '';
		foreach($worlds as $key){
			$obj = json_decode($key,true);
			$worldList = $worldList.$obj['name'].' '.$obj['number_users'].' '. $obj['cap'];
		}
		return View::make('home')->with('worlds', $worldList);
	}

	public function processButton(){
		return View::make('log_in');
	}

}
