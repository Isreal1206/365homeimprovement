<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('links.contact');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name'				=>		'bail|required|string|alpha|min:3|max:100',
    		'mobile'			=>		'required|string|min:7|max:25',
    		'email'				=>		'required|email|string',
    		'subject'			=>		'required|string',
    		'comment'			=>		'required|string',
    	]);

    	$contacts				=	new Contact;
    	$contacts->name 		=	$request->name;
    	$contacts->mobile 		=	$request->mobile;
    	$contacts->email 		=	$request->email;
    	$contacts->subject 		=	$request->subject;
    	$contacts->comment 		=	$request->comment;
    	$contacts->save();

        return back()->with("contact", "Message Sent, we'll get back to you via email.");
    }
}
