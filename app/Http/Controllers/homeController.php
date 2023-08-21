<?php

namespace App\Http\Controllers;

use illuminate\View\View;

class HomeController extends Controller
{
    public function index(): view
    {
        return view('home.index');
    }
}
