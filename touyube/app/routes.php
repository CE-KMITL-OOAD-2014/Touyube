<!-- Route page -->
<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route web first page
Route::get('/', function()
{
	return View::make('login');
});

//Route to login function in user controller
Route::post('/willinterface', 'UsersController@login');

//Route to getRegister function in user controller
Route::get('/register', array(
	'as'=>'register-get',
	'uses'=>'UsersController@getRegister'
	));

//Route to main page when user login success
Route::get('/interface',function(){
	return View::make('UserInterface');
 });

//Route to edit profile page
Route::get('/edit', function(){
	return View::make('editProfile');
});

//Route to editPro function in edit controller
Route::post('/getEdit', 'EditController@editPro');

//Route to editProfile function in profile controller
Route::post('/editprofile','ProfileController@editProfile');

//Route to profile page and route to getProfile function in Profile controller
Route::get('/profile',array(
	'as'=>'profile',
	'uses'=>'ProfileController@getProfile'
	));

//Route to upload page
Route::get('/upload',function(){
	return View::make('upload');
});

//Route to uploadFile function in upload controller
Route::post('/upup','UploadController@uploadFile');

//Route to postComment function in post controller
Route::post('/comment','PostController@postComment');

//Route to register function in user controller
Route::post('/register', 'UsersController@register');

//Route to video page and getVideo function in upload controller
Route::get('/video', array(
	'as'=>'video-view',
	'uses'=>'UploadController@getVideo'
	)
	);

