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
		$worlds = World::all();
		$worldList = '';
		foreach($worlds as $key){
			$obj = json_decode($key,true);
			$worldList = $worldList.$obj['name'].' '.$obj['number_users'].' '. $obj['cap'];
		}
		return View::make('home')->with('worlds', $worldList);
	}

	public function processButton(){
		if(Input::get('join') == 'Join'){
			return Redirect::to('user/register');
		}
		if(Input::get('login') == 'Login'){
			return Redirect::to('user/login');
		}
		if(Input::get('faq') == 'FAQ'){
			return Redirect::to('faq');
		}
		if(Input::get('wiki') == 'Wiki'){
			return Redirect::to('getting_started');
		}else{
			return View::make('home');
		}
	}

}
