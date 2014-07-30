<?php

class UserController extends \BaseController {

    public function getLogin(){
        if(Sentry::check()){
            return Redirect::to('/backend/overview');
        }else{
    	    return View::make('user.log_in');
        }   
    }

    public function postLogin(){
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = Input::get('remember');
        if(Sentry::authenticate(array('email'=>$email, 'password' => $password), $remember)){
            return Redirect::to('user/login_success');
        } 
        else{
            Session::flash('failed', 'true');
            return View::make('user.log_in')->withInput();
        } 
    }

    public function getLogoff(){
        Auth::logout();
        Redirect::to('/');
    }

    public function postLogoff(){

    }

    public function getSettings(){
        return View::make('user.settings');
    }

    public function postSettings(){

    }

    public function getPayment(){
        return View::make('user.payment');
    }

    public function postPayment(){

    }

    public function getSuccess(){
        $first = Session::get('name');
        return View::make('user.register_success')->with('name', $first);
    }

    public function getRegister(){
        if(Sentry::check()){
            return Redirect::to('user/login_success');
        } 
        return View::make('user.register');
    }

    public function loginSuccess(){
        return Redirect::to('backend/overview');
    }

    public function postRegister(){
        $first = Input::get('first_name');
        $last = Input::get('last_name');
        $email = Input::get('email');
        $password = Input::get('password');

        $user = Sentry::createUser(array('email' => $email, 'password' => $password, 'first_name' => $first, 'last_name' => $last));
        $code = $user->getActivationCode();
        return Redirect::to('user/success')->with('name', $first);
    }

}
