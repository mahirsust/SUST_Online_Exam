<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function showHome()
    {
        return view('welcome.mainhome');
    }

    public function showAbout()
    {
        return view('welcome.about');
    }

    public function showFeatures()
    {
        return view('welcome.feature');
    }

    public function showContact()
    {
        return view('welcome.contact');
    }
    
}
