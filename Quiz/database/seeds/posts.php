<?php

use Illuminate\Database\Seeder;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('posts')->delete();

        $now = date('Y-m-d H:i:s');

        DB::table('posts')->insert([
            'users_id' => '1',
            'que' => 'Example Question?',
            'option_a' => 'Wrong Answer -1 Score',
            'option_b' => 'Wrong Answer -1 Score',
            'option_c' => 'Wrong Answer -1 Score',
            'option_d' => 'Correct Answer +1 Score',
            'ans' => 'D',
            'created_at'=>$now,
            'updated_at'=>$now
        	]);

        DB::table('posts')->insert([
            'users_id' => '1',
            'que' => 'Example Question?',
            'option_a' => 'Wrong Answer -1 Score',
            'option_b' => 'Correct Answer +1 Score',
            'option_c' => 'Wrong Answer -1 Score',
            'option_d' => 'Wrong Answer -1 Score',
            'ans' => 'B',
            'created_at'=>$now,
            'updated_at'=>$now
        	]);

        DB::table('posts')->insert([
            'users_id' => '1',
            'que' => 'Example Question?',
            'option_a' => 'Wrong Answer -1 Score',
            'option_b' => 'Wrong Answer -1 Score',
            'option_c' => 'Correct Answer +1 Score',
            'option_d' => 'Wrong Answer -1 Score',
            'ans' => 'C',
            'created_at'=>$now,
            'updated_at'=>$now
        	]);

        DB::table('posts')->insert([
            'users_id' => '2',
            'que' => 'Example Question?',
            'option_a' => 'Correct Answer +1 Score',
            'option_b' => 'Wrong Answer -1 Score',
            'option_c' => 'Wrong Answer -1 Score',
            'option_d' => 'Wrong Answer -1 Score',
            'ans' => 'A',
            'created_at'=>$now,
            'updated_at'=>$now
        	]);

        DB::table('posts')->insert([
            'users_id' => '2',
            'que' => 'Example Question?',
            'option_a' => 'Wrong Answer -1 Score',
            'option_b' => 'Wrong Answer -1 Score',
            'option_c' => 'Correct Answer +1 Score',
            'option_d' => 'Wrong Answer -1 Score',
            'ans' => 'C',
            'created_at'=>$now,
            'updated_at'=>$now
        	]);

        DB::table('posts')->insert([
            'users_id' => '2',
            'que' => 'Example Question?',
            'option_a' => 'Wrong Answer -1 Score',
            'option_b' => 'Correct Answer +1 Score',
            'option_c' => 'Wrong Answer -1 Score',
            'option_d' => 'Wrong Answer -1 Score',
            'ans' => 'B',
            'created_at'=>$now,
            'updated_at'=>$now
        	]);
    }
}
