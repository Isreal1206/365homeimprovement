<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsAndPressController extends Controller
{
    public function index()
    {
        return view('links.news-and-press-release');
    }
}
