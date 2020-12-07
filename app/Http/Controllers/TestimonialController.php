<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        return view('links.case-study-and-testimonials');
    }
}
