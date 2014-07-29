<?php

class UserController extends \BaseController {

    public function getLogin(){
    	return View::make('user.log_in');
    }

    public function postLogin(){
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = Input::get('remember');
        if (Auth::attempt(array('email' => $email, 'password' => $password)))
        {
            return Redirect::to('/');
        }else{
            Session::flash('failed', 'true');
            return View::make('user.log_in');
        }   
    }

    private function login($email, $password){
        $users = User::all();
        $user = '';
        $user = $this->match($users, $email);
        if($user == null){
            return false;
        }
        if (Hash::check($password, trim($user->getPassword()))){
            return true;
        }
        return false;

    }

    private function match($users, $email){
        foreach($users as $user){
            print($user);
            if($user->getEmail() == $email){
                return $user;
            }
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
        return View::make('user.register');
    }

    public function postRegister(){
        $first = Input::get('first_name');
        $last = Input::get('last_name');
        $email = Input::get('email');
        $password = Hash::make(Input::get('password'));
        $u = User::create(array('email' => $email, 'password' => $password, 'first_name' => $first, 'last_name' => $last));
        return Redirect::to('user/success')->with('name', $first);
    }

}
