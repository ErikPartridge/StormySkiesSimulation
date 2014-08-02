<?php

class UserController extends \BaseController {


    public function getLogin(){
        if(Sentry::check()){
            return Redirect::to('/backend/home');
        }else{
    	    return View::make('user.log_in');
        }   
    }

    public function postLogin(){
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = Input::get('remember');
        $passed = true;
        try{
            Sentry::authenticate(array('email'=>$email, 'password' => $password), $remember);
            return Redirect::to('user/login_success');
        }
        catch(Exception $e){
        }
        Session::flash('failed', 'true');
        return View::make('user.log_in');
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
        return Redirect::to('backend/home');
    }

    public function postRegister(){
        $first = Input::get('first_name');
        $last = Input::get('last_name');
        $email = Input::get('email');
        $password = Input::get('password');

        $validator = Validator::make(
            array(
                'first' => $first,
                'last' => $last,
                'email' => $email,
                'password' => $password
            ),
            array(
                'first' => 'required|max:255',
                'last'  => 'required|max:255',
                'password' => 'required|min:6|max:32',
                'email' => 'required|email|unique:users|max:255'
            )
        );

        if($validator->fails()){
            return View::make('user.register')->withErrors($validator, 'failures');
        }

        $user = Sentry::createUser(array('email' => $email, 'password' => $password, 'first_name' => $first, 'last_name' => $last));
        $code = $user->getActivationCode();
        
        Mailgun::send('emails.code', array('code' => $code, 'name' => $first), function($message) use($user)
        {   
            $string = $user->first_name.' '.$user->last_name;
            $message->to($user->email, $string)->subject('Welcome!');
        });

        return Redirect::to('user/success')->with('name', $first);
    }

}
