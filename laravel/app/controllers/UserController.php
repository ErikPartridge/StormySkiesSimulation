<?php

class UserController extends \BaseController {

    public function getLogin(){
    	return View::make('user.log_in');
    }

    public function postLogin(){

    }

    public function getLogoff(){

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
        return View::make('user.success')->with('name', $first);
    }

    public function getRegister(){
        return View::make('user.register');
    }

    public function postRegister(){
        $first = Input::get('first_name');
        $last = Input::get('last_name');
        $email = Input::get('email');
        $password = Hash::make(Input::get('password'));

        $user = new User;

        $user->setFirstName($first);
        $user->setLastName($last);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setUsername($email);

        $u = User::create(array('email' => $email, 'password' => $password));
        return Redirect::to('user/success')->with('name', $first);
    }



}
