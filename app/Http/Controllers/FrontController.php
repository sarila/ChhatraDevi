<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function aboutUs()
    {
    	return view('frontend.about');
    }

    public function team()
    {
    	return view('frontend.about');
    }

    public function event()
    {
    	return view('frontend.about');
    }


    public function gallery()
    {
    	return view('frontend.about');
    }

    public function service()
    {
    	return view('frontend.about');
    }
}
