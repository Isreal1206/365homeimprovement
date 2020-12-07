<?php

namespace App\Http\Controllers\User\HomeOwner;

use Auth;
use App\User;
use App\Category;
use App\HomeOwner;
use App\RequestQuote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeOwnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $homeowner    =    HomeOwner::where('email', Auth::user()->email)->first();
        
        return view('user.home_owners.homeowner')->with('homeowner', $homeowner);
    }

    public function register() {
        return view('user.home_owners.homeowner-register');
    }

    public function create(Request $request) {
        // Validate Form
        $this->validate($request, [
            'fullnames'             =>  'required|string|max:255',
            'email'                 =>  'required|string',
            'mobile_no'             =>  'required|string|min:6|max:25',
            'address'               =>  'required|string|max:255',
        ]);

        $homeowner                  =   new HomeOwner;
        $homeowner->homeowner_id    =   $request->homeowner_id;
        $homeowner->fullnames       =   $request->fullnames;
        $homeowner->email           =   $request->email;
        $homeowner->mobile_no       =   $request->mobile_no;
        $homeowner->address         =   $request->address;
        $homeowner->save();

        $id                         =   Auth::user()->id;
        $users                      =   User::find($id);
        $users->status              =   "1";
        $users->save();

        Session()->flash('homeowner_register', 'Registration Successful!');
        return redirect()->route('homeowner.dashboard');
    }

    public function update(Request $request) {
        // Validate Form
        $this->validate($request, [
            'fullnames'             =>  'sometimes',
            'mobile_no'             =>  'sometimes',
            'address'               =>  'sometimes',
        ]);

        $homeowner                  =       HomeOwner::where('email', Auth::user()->email)->first();

        $old_fullnames              =   $homeowner->fullnames;
        $old_mobile_no              =   $homeowner->mobile_no;
        $old_address                =   $homeowner->address;

        if($request->fullnames == null) {
            $homeowner->fullnames      =       $old_fullnames;
        } else {
            $homeowner->fullnames      =       $request->fullnames;
        }
        
        if($request->mobile_no == null) {
            $homeowner->mobile_no      =   $old_mobile_no;
        } else {
            $homeowner->mobile_no      =   $request->mobile_no;
        }

        if($request->address == null) {
            $homeowner->address        =   $old_address;
        } else {
            $homeowner->address        =   $request->address;
        }

        $homeowner->save();

        Session()->flash('homeowner_update', 'Update Successful!');
        return back();
    }

    public function rq() {
        $categories                 =       Category::all();
        $homeowner                  =       HomeOwner::where('email', Auth::user()->email)->first();
        return view('user.home_owners.request-quote')->with('homeowner', $homeowner)->with('categories', $categories);
    }

    public function rq_store(Request $request) {
        // Validate Form
        $this->validate($request, [
            'homeowner_id'          =>  'required|string|max:255',
            'email'                 =>  'required|string',
            'category'              =>  'required|string|min:6|max:25',
            'state'                 =>  'required|string',
            'lga'                   =>  'required|string|max:25',
            'start_work'            =>  'required|string',
            'property_type'         =>  'required|string',
            'work_type'             =>  'required|string',
            'budget'                =>  'required|string',
            'job_status'            =>  'required|string',
            'property_relation'     =>  'required|string',
            'description'           =>  'required|string',
            'image_file'            =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bid_no'                =>  'required|string',
            'contact_time'          =>  'required|string',
        ]);

        $quote                      =   new RequestQuote;
        $quote->homeowner_id        =   $request->homeowner_id;
        $quote->email               =   $request->email;
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
        if($request->hasFile('image_file')) {
            $file                   =   $request->file('image_file');
            $filenameWithExt        =   time() .'.'. $file->getClientOriginalExtension();
            $safe_path              =   '/img/homeowners/';
            $fileNameToStore        =   $safe_path.$filenameWithExt;
            $file->move(public_path($safe_path), $filenameWithExt);             
        } else {
            $fileNameToStore        =   'noimage.jpg';
        }
        $quote->image_file                =   $fileNameToStore;
        
        $quote->bid_no              =   $request->bid_no;
        $quote->contact_time        =   $request->contact_time;
        $quote->save();

        Session()->flash('homeowner_quote', 'Thank you for submitting your quote request, we will get back to you shortly');
        return redirect()->route('homeowner.dashboard');
    }

    public function properties() {
        $requestQuote = RequestQuote::where('email', Auth::user()->email)->get();
        //$requestQ = RequestQuote::where('email', Auth::user()->email)->first();
        return view('user.home_owners.properties')->with('requestQuote', $requestQuote);
        //->with('requestQa', $requestQ);
    }

}
