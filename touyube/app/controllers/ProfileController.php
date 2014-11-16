<?php

//Profile controller for control profile page
class ProfileController extends BaseController {

    //getProfile function for get all database from user that login
    public function getProfile(){
    	$name = Auth::user();
         return View::make('profile')->with('name',$name);
       
    }

    //editProfile function for save about and contact data to database
    public function editProfile(){
    	$edit = Auth::user();
    	$edit->about = Input::get('editabout');
    	$edit->contact = Input::get('editcontact');

    	$edit->save();
          return Redirect::to('profile');
    }
}	