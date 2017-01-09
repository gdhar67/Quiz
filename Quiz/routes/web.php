<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/





Route::group(['middleware' => ['web']],function () 

{


Route::get('/welcome', 'HomepageController@index');

Route::get('/homepage', 'homepagecontroller@home',[

	//'as'=>'home'

	]);

Route::post('/signup',[ 
	'uses'=> 'usercontroller@postregister',
	'as' => 'register'
	]);

Route::post('/signin',[ 
	'uses'=> 'usercontroller@postlogin',
	'as' => 'login'
	]);

Route::get('/dashboard', [
	'uses' => 'usercontroller@getDashboard',
	'as' => 'dashboard',
	'middleware'=>'auth'
	]);


});