<?php
namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{

	public function postregister(Request $request)
	{
		$name=$request['Name'];
		$username=$request['Username'];
		$password=bcrypt($request['Password']);

		$this->validate($request, [
			'Username' => 'required|max:20|unique:users',
			'Name' => 'required|max:120',
			'Password' => 'required|min:4'
			]);

		$user = new Users();
		$user->name=$name;
		$user->username=$username;
		$user->password=$password;

		$user -> save();

		Auth::login($user);

		return redirect() -> route('dashboard');

	}

	public function postlogin(Request $request)
	{

		$this->validate($request, [
			'Username' => 'required',
			'Password' => 'required'
			]);

		if(Auth::attempt( ['username' => $request['Username'],  'password' =>$request['Password'] ]))
			{
				return redirect() -> route('dashboard');
			}
		else
			{
				return redirect() -> back();
			}
	}
	

	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('dashboard');
	}

	public function getQuizque()
	{
		return view('question');
	}
}