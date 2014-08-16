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

	public function success()
	{
		$input = Input::except('_token');
		$first = $input['first'];
		$last = $input['last'];
		$email = $input['email'];
		$validator = Validator::make(array('first' => $first, 'last' => $last, 'email' => $email), array('first' => 'max:255', 'last' => 'max:255', 'email'=>'required|unique:mailing_list,email'));
		if($validator->fails()){
			Session::flash('sorry', true);
			return Redirect::to('/');
		}
		$r = new Recipient();
		$r->first = $first;
		$r->last = $last;
		$r->email = $email;
		$r->save();
		return View::make('success');
	}

}
