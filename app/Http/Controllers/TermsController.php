<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function privacy()
    {
        return view('links.privacy-policy');
    }

    public function tos()
    {
        return view('links.terms-of-use');
    }

    public function disclaimer()
    {
        return view('links.disclaimer-and-phishing-claims');
    }
}
