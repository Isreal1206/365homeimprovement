<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return view('links.career.index');
    }

    public function redirect()
    {
        return view('links.career.redirect');
    }
}
