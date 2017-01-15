<?php
namespace App\Http\Controllers;

use App\Post;
use App\Ans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class postcontroller extends Controller
{
	public function getDashboard()
	{
		$posts= Post::orderBy('created_at','desc')->get();
		$anss= Ans::orderBy('created_at','desc')->get(); 

		
		if($posts)
		{
			if($anss)
				return view('dashboard',['posts' => $posts],['anss' => $anss]);
			else
				return view('dashboard',['posts' => $posts],['anss' => null]);
		}
		else
		{
			return view('dashboard',['posts' => null]);
		}
		
	}


	public function postCreatepost(Request $request)
	{
		
		$this->validate($request,[
			'question' =>'required|max:1000',
			'option_a' =>'required|max:1000',
			'option_b' =>'required|max:1000',
			'option_c' =>'required|max:1000',
			'option_d' =>'required|max:1000',
			]);


		$post = new Post();
		$post->que= $request['question'];
		$post->option_a= $request['option_a'];
		$post->option_b= $request['option_b'];
		$post->option_c= $request['option_c'];
		$post->option_d= $request['option_d'];
		$post->ans= $request['option'];

		$message ='There was an error';

		if($request->user()->posts()->save($post))
		{
			$message ='Questioon submitted successfully !';
		}

		return redirect()->route('question')->with(['message'=>$message]);
	}
}