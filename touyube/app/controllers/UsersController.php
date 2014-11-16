<?php

//User controller for control login page
class UsersController extends BaseController {

    //Login function to get data for login from database and login
	public function login(){
		$emailInput = Input::get('inputemail');
		$passwordInput = Input::get('inputpassword');

		$loginTry = array(
			'email'=> $emailInput,
			'password'=> $passwordInput
			);
		if (Auth::attempt($loginTry))
			return View::make('UserInterface');
		else return View::make('login');
	}

    //Register function to save register detail to database
    public function register(){
    	$validator = Validator::make(Input::all(),
    		array(
                'username' => 'required|unique:users',
    			'email'=>'required|max:50|email|unique:users',
    			'password'=>'required|max:256|min:4'
    			)
    		);
    	if($validator->fails()){
    		return Redirect::route('register-get')
    		->withErrors($validator)
    		->withInput();
    	}else{
		$user = new User();
    	$user->username = Input::get('username');
    	$user->email = Input::get('email');
    	$user->password = Hash::make(Input::get('password'));
        $user->about = Input::get('about');
        $user->contact = Input::get('contact');
    	$user->save();
         return View::make('login');
    	}  	
    }

    //getRegister function to call register page
    public function getRegister(){
    	return View::make('register');
    }
}