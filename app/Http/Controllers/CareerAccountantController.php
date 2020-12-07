<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerAccountantController extends Controller
{
    //use Notifiable;

    public function index()
    {
        return view('links.career.accountant');

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

        Mail::send('emails.accountant', $data, function($cv) use ($data){
            $cv->from($data['email']);
            $cv->to ($data['email']); //the client's email address will go here
            $cv->subject("Accountant CV");
            $cv->attach($data['file']->getRealPath(), array(
                'as'	=> 'accountant'.'.'.$data['file']->getClientOriginalExtension(),
                'mime'	=> $data['file']->getMimeType()
            )); 

        });

        //Session()->flash('message', 'Your CV was succesfully submitted');
        return redirect()->route('career.redirect');
    }
}
