<?php

namespace CCZ\Http\Controllers\Home;

use Illuminate\Http\Request;
use CCZ\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.home');
    }
}
