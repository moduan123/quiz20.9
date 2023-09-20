<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MainController extends Controller
{
   
    public function home()
    {
    	return view('pages.home');
    }


      public function about()
    {
    	return view('pages.about');
    }

      public function post()
    {
    	return view('pages.post');
    }

      public function contact()
    {
    	return view('pages.contact');
    }

}
