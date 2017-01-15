<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    		DB::table('users')->delete();

            $now = date('Y-m-d H:i:s');

            DB::table('users')->insert([
            'Name' => 'user',
            'Username' => 'user',
            'password' => bcrypt('user'),
            'created_at'=>$now,
            'updated_at'=>$now

        	]);

            DB::table('users')->insert([
            'Name' => 'admin',
            'Username' => 'admin',
            'password' => bcrypt('admin'),
            'created_at'=>$now,
            'updated_at'=>$now
        	]);

               
    }
}
