<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        return view('links.newsletter');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'				=>		'required|string|max:100',
    		'mobile'			=>		'required|string|min:7|max:25',
    		'email'				=>		'required|email|unique:newsletters|string',
    	]);

    	$newsletters				=	new Newsletter;
    	$newsletters->name 			=	$request->name;
    	$newsletters->mobile 		=	$request->mobile;
    	$newsletters->email 		=	$request->email;
    	$newsletters->save();

    	Session()->flash('newsletter', 'Thanks for subscribing!');
        return back();
    }
}
