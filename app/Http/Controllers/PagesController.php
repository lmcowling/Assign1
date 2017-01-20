<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() // loads the home page view
    {
      return view('welcome');
    }

    public function about() // loads the about page view
    {
        return view('pages.about');
    }
}
