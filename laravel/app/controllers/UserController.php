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

    public function logoff(){
        Sentry::logout();
        return Redirect::to('/');
    }

    public function postLogoff(){
        Sentry::logout();
        return Redirect::to('/');
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

    public function checkCode($id){
        $user = null;
        try{
            $user = Sentry::findUserByActivationCode($id);
            if($user != null){
                if($user->attemptActivation($id)){
                    return Redirect::to('user/login');
                }else{
                    return Redirect::to('/user/register');
                }
            }
        }catch(Exception $e){
            return Redirect::to('/user/register');
        }

    }

    public function getForgot(){
        return View::make('user/forgot');
    }

    public function postForgot(){
        $input = Input::get('email');
        try{
            // Find the user using the user email address
            $user = Sentry::findUserByLogin($input);

            // Get the password reset code
            $resetCode = $user->getResetPasswordCode();
            Mailgun::send('emails.forgot', array('code' => $resetCode, 'email' => $user->email), function($message) use($user)
            {   
                $string = $user->first_name.' '.$user->last_name;
                $message->to($user->email, $string)->subject('Reset Password');
            });
        }   
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            return Redirect::to('/user/forgot');
        }   
    } 
    public function reset($code, $email){
        try{
            // Find the user using the user id
            $user = Sentry::findUserByEmail($email);

            // Check if the reset password code is valid
            if ($user->checkResetPasswordCode($code))
            {

                if ($user->attemptResetPassword('8f1Z7wA4uVt7VemBpGSfaoI9mcjdEwtK8elCnQOb', 'new_password'))
                {
                }
                else
                {

                }
            }
            else
            {
                
            }       
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
            echo 'User was not found.';
        }
    }     

}
