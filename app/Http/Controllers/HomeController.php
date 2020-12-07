<?php

namespace App\Http\Controllers;

use App\Category;
use App\MarketCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index')->with('categories', $categories);
    }

    public function request()
    {
        return view('links.request-quote');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'start_work'        =>  'required|string',
            'property_type'     =>  'required|string',
            'work_type'         =>  'required|string',
            'budget'            =>  'required|string',
            'job_status'        =>  'required|string',
            'property_relation' =>  'required|string',
            'description'       =>  'required|string',
            'file'              =>  'sometimes|image|nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name'              =>  'required|string',
            'address'           =>  'required|string',
            'email'             =>  'required|string',
            'mobile'            =>  'required|string|max:25',
            'office_no'         =>  'required|string|max:25',
            'bid_no'            =>  'required|string',
            'contact_time'      =>  'required|string',
        ]);

        $quote = new RequestQuote;
        $quote->category            =   $request->category;
        $quote->state               =   $request->state;
        $quote->lga                 =   $request->lga;
        $quote->start_work          =   $request->start_work;
        $quote->property_type       =   $request->property_type;
        $quote->work_type           =   $request->work_type;
        $quote->budget              =   $request->budget;
        $quote->job_status          =   $request->job_status;
        $quote->property_relation   =   $request->property_relation;
        $quote->description         =   $request->description;
        if($request->hasFile('file')) {
            $file               =   $request->file('file');
            $extension          =   $file->getClientOriginalExtension();
            $filenameWithExt    =   time() . '.' . $extension;
            $safe_path          =   '/img/requestQuoteFiles/';
            $fileNameToStore    =   $safe_path.$filenameWithExt;
            $file->move(public_path('img/requestQuoteFiles/'), $filenameWithExt);             
        } else {
            $fileNameToStore    =   'noimage.jpg';
        }
        $quote->file                =   $fileNameToStore;
        $quote->name                =   $request->name;
        $quote->address             =   $request->address;
        $quote->email               =   $request->email;
        $quote->mobile              =   $request->mobile;
        $quote->office_no           =   $request->office_no;
        $quote->bid_no              =   $request->bid_no;
        $quote->contact_time        =   $request->contact_time;
        $quote->save();

        Session()->flash('success', "Your request has been sent successfully, we'll get back to you via your email, Thanks.");
        return view('links.request-quote');
    }

}
