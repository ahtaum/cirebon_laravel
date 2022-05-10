<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function articles()
    {
        return view('articles');
    }
    public function contentArticles()
    {
        return view('contentArticles');
    }
}
