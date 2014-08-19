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
		return View::make('home')->with('worlds', $worlds);
	}

	public function processButton(){
		if(Input::get('join') == 'Join'){
			return Redirect::to('user/register');
		}
		if(Input::get('login') == 'Login'){
			return Redirect::to('user/login');
		}
		if(Input::get('forums') == 'Forums'){
			return Redirect::to('http://forums.takeoffsim.com');
		}
		if(Input::get('wiki') == 'Wiki'){
			return Redirect::to('http://wiki.takeoffsim.com');
		}
		if(Input::get('join') == 'Join Today!'){
			return Redirect::to('user/register');
		}if(Input::get('more') == 'Learn More!'){
			return Redirect::to('features');
		}else{
			return View::make('home');
		}
	}

}
