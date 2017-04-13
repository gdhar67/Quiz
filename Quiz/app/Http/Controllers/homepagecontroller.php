<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomepageController extends Controller
{
    public function Index()
    {

    	return view('welcome');
    }


    public function Home()
    {

    	return view('homepage');
    }

}
