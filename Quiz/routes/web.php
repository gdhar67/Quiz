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

Route::get('/homepage', 'homepagecontroller@home');

Route::post('/signup',[ 
	'uses'=> 'usercontroller@postregister',
	'as' => 'register'
	]);

Route::post('/signin',[ 
	'uses'=> 'usercontroller@postlogin',
	'as' => 'login'
	]);

Route::get('/logout', [
	'uses' => 'usercontroller@getLogout',
	'as' => 'logout'
	]);

Route::get('/dashboard', [
	'uses' => 'postcontroller@getDashboard',
	'as' => 'dashboard',
	'middleware'=>'auth'
	]);

Route::get('/viewque', [
	'uses' => 'postcontroller@getViewque',
	'as' => 'viewque',
	'middleware'=>'auth'
	]);

Route::get('/question', [
	'uses' => 'usercontroller@getQuizque',
	'as' => 'question',
	'middleware'=>'auth'
	]);

Route::post('/submitque',[ 
	'uses'=> 'postcontroller@postCreateque',
	'as' => 'submit.que'
	]);

Route::post('/submitans',[ 
	'uses'=> 'anscontroller@postRecordans',
	'as' => 'submit.ans'
	]);

Route::post('/edit',[
	'uses'=> 'postcontroller@postEditPost',
	'as' => 'edit'
]);

});