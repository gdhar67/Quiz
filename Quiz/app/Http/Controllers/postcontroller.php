<?php
namespace App\Http\Controllers;

use App\Post;
use App\Ans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
	public function GetDashboard()
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


	public function GetViewQue()
	{
		$posts= Post::orderBy('created_at','desc')->get();
		
		if($posts)
		
			return view('viewquestions',['posts' => $posts]);

		else
		{
			return view('viewquestions',['posts' => null]);
		}



	}


	public function PostCreateQue(Request $request)
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


	public function PostEditPost(Request $request){

		$this->validate($request,[
			'que' => 'required',
			'option_a' => 'required' ,
			'option_b' => 'required',
			'option_c' => 'required',
			'option_d' => 'required',
			'ans' => 'required'

			]);

		$post =Post::find($request['postId']);
		$post->que= $request['que'];
		$post->option_a= $request['option_a'];
		$post->option_b= $request['option_b'];
		$post->option_c= $request['option_c'];
		$post->option_d= $request['option_d'];
		$post->ans= $request['ans'];
		$post->update();
		return response()->json([
			'new_que' => $post -> que,
			'new_opta'=> $post -> option_a,
			'new_optb'=> $post -> option_b,
			'new_optc'=> $post -> option_c,
			'new_optd'=> $post -> option_d,
			'new_ans' => $post -> ans
			],200);

	}






}