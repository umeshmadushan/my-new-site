<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // view home page 
    public function homePage()
    {
        return view('welcome');
    }

    // view about page 
    public function aboutPage()
    {
        return view('about');
    }

    //view reach me page
    public function reachMePage()
    {
        return view('reachMe');
    }
}
