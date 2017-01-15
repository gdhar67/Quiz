<?php
namespace App\Http\Controllers;

Use App\Users;
Use App\Post;
use App\Ans;
use Illuminate\Http\Request;

class anscontroller extends Controller
{

	public function postRecordans(Request $request)
	{
		
		
		$response='Opps ! Your Answer is Wrong. The correct answer is:';
		
		$ans = new Ans();
		$ans->Ans= $request['option'];
		$ans->post_id= $request['post_id'];
		$id=$request['user_id'];
		$user= Users::where('id',$id)->first();
		$score=$user->score;

		$posts= Post::where('id', $ans->post_id)->first();
		$question=$posts->que;
		$correct_option=$posts->ans;

			if($correct_option == 'A')
			{
				$correct_ans=$posts->option_a;
			}
			elseif ($correct_option == 'B') 
			{
				$correct_ans=$posts->option_b;
			}
			elseif ($correct_option == 'C') 
			{
				$correct_ans=$posts->option_c;
			}
			else
			{
				$correct_ans=$posts->option_d;
			}
		
			

			if($posts->ans == $request['option'])
			{
				$score++;
				$response='Congratulations ! Your Answer is Right.';
			}
			else
			{
				$score--;
			}

		$user= Users::where('id',$id)->update(['score'=>$score]);
		

		$message ='There was an error';
		$message1='Question : ';
		$message2=':';



		if($request->user()->posts()->save($ans))
		{
			$message ='Answer submitted successfully!';
		}

		return redirect()->route('dashboard')->with(['message'=>$message,'message1'=>$message1,'message2'=>$message2,'response'=>$response,'question'=>$question,'correct_option'=>$correct_option,'correct_ans'=>$correct_ans]);
	}
}