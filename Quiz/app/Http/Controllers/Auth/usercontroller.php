<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function postSignUp(Request $request)
	{
		$name=$request['Name'];
		$username=$request['Username'];
		$password=bcrypt($request['Pasword']);

		$user=new user();
		$user->name=$Name;
		$user->username=$Username;
		$user->pasword=$pasword;

		user->save();

		return redirect-> back();

	}

	public function postSignIn(Request $request)
	{

	}


}