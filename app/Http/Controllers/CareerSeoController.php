<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerSeoController extends Controller
{
    //use Notifiable;
    
    public function index()
    {
        return view('links.career.seo');

    }
    public function sendmail(Request $request)
    {
        $this->validate($request, [
            'name'		=>		'required|string',
            'email'		=>		'required|email',
            'file' 		=>		'required|mimes:doc,pdf,docx',
            ]
        );

        $data = array(
            'name'		=>		$request->name,
            'email'		=>		$request->email,
            'file'		=>		$request->file

        );

        Mail::send('emails.seo', $data, function($cv) use ($data){
            $cv->from($data['email']);
            $cv->to ($data['email']); //the client's email address will go here
            $cv->subject("SEO Experts and Marketers CV");
            $cv->attach($data['file']->getRealPath(), array(
                'as'	=> 'SEO Experts and Marketers'.'.'.$data['file']->getClientOriginalExtension(),
                'mime'	=> $data['file']->getMimeType()
            ));

        });
        
        //Session()->flash('message', 'Your CV was succesfully submitted');
        return redirect()->route('career.redirect');
    }
}
