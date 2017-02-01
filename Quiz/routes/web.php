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


Route::get('/welcome', 'HomepageController@Index');

Route::get('/homepage', 'Homepagecontroller@Home');

Route::post('/signup',[ 
	'uses'=> 'UserController@PostRegister',
	'as' => 'register'
	]);

Route::post('/signin',[ 
	'uses'=> 'UserController@PostLogin',
	'as' => 'login'
	]);

Route::get('/logout', [
	'uses' => 'UserController@GetLogout',
	'as' => 'logout'
	]);

Route::get('/dashboard', [
	'uses' => 'PostController@GetDashboard',
	'as' => 'dashboard',
	'middleware'=>'auth'
	]);

Route::get('/viewque', [
	'uses' => 'PostController@GetViewQue',
	'as' => 'viewque',
	'middleware'=>'auth'
	]);

Route::get('/question', [
	'uses' => 'UserController@GetQuizQue',
	'as' => 'question',
	'middleware'=>'auth'
	]);

Route::post('/submitque',[ 
	'uses'=> 'PostController@PostCreateQue',
	'as' => 'submit.que'
	]);

Route::post('/submitans',[ 
	'uses'=> 'AnsController@PostRecordAns',
	'as' => 'submit.ans'
	]);

Route::post('/edit',[
	'uses'=> 'PostController@PostEditPost',
	'as' => 'edit'
	]);



});