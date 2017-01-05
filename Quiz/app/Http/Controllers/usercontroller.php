<?php
namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class usercontroller extends Controller
{

	public function getDashboard()
	{
		return view('dashboard');
	}



	public function postregister(Request $request)
	{
		$name=$request['Name'];
		$username=$request['Username'];
		$password=bcrypt($request['Pasword']);

		$user = new Users();
		$user->name=$name;
		$user->username=$username;
		$user->password=$password;

		$user -> save();

		return redirect() -> route('dashboard');

	}

	public function postlogin(Request $request)
	{

	}


}