<?php

namespace App\Http\Controllers\User\Trainer;

use Auth;
use Session;
use App\User;
use App\Category;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainerController extends Controller
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
        $user_id       =    auth()->user()->id;
        $users         =    User::find($user_id);
        $categories    =    Category::all();
        $trainers      =    Trainer::all();
        
        return view('user.trainers.trainer')->with('users', $users)->with('categories', $categories)->with('trainers', $trainers);
    }

    public function register() {
        $categories = Category::all();
        $trainers   = Trainer::all();
        return view('user.trainers.trainer-register')->with('trainers', $trainers)->with('categories', $categories);
    }

    public function create(Request $request) {
        // Validate Form
        $this->validate($request, [
            'title'                 =>  'required|string',
            'fullnames'             =>  'required|string|max:255',
            'organization'          =>  'required|string',
            'job_title'             =>  'required|string',
            'description'           =>  'required|string|max:500',
            'image_file'            =>  'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'mobile_no'             =>  'required|string',
            'address'               =>  'required|string',
            'city'                  =>  'required|string',
            'country'               =>  'required|string',
            'post_code'             =>  'sometimes',
            'fax'                   =>  'sometimes',
            'price_range'           =>  'required|string',
            'language'              =>  'required|string',
        ]);

        $trainers                   =   new Trainer;
        $trainers->trainer_id       =   $request->trainer_id;
        $trainers->title            =   $request->title;
        $trainers->fullnames        =   $request->fullnames;
        $trainers->email            =   $request->email;
        $trainers->organization     =   $request->organization;
        $trainers->job_title        =   $request->job_title;
        $trainers->description      =   $request->description;
        $trainers->mobile_no        =   $request->mobile_no;
        $trainers->address          =   $request->address;
        $trainers->city             =   $request->city;
        $trainers->country          =   $request->country;
        $trainers->post_code        =   $request->post_code;
        $trainers->fax              =   $request->fax;
        $trainers->price_range      =   $request->price_range;
        $trainers->language         =   $request->language;

        $image                  =   $request->image_file;
        $filenameWithExt        =   time() .'.'. $image->getClientOriginalExtension();
        $safe_path              =   '/img/trainers/';
        $filenameToStore        =   $safe_path.$filenameWithExt;
        $image->move(public_path($safe_path), $filenameWithExt);
        
        $trainers->image_file       =   $filenameToStore;
        $trainers->save();

        $trainers                   =   Trainer::where('email', '=', Auth::user()->email)->first();
        $trainers->url              =   $request->url . $trainers->trainer_id;
        $trainers->save();

        return redirect()->route('trainer.terms');
    }

    public function terms() {
        $categories                 =   Category::all();
        $trainers                   =   Trainer::where('email', '=', Auth::user()->email)->first();
        
        return view('user.trainers.terms')->with('trainers', $trainers)->with('categories', $categories);
    }

    public function create_terms() {
        $trainers                   =   Trainer::where('email', '=', Auth::user()->email)->first();
        $users                      =   User::where('email', '=', $trainers->email)->first();
        $users->status              =   "1";
        $users->save();

        Session()->flash('trainer_register', 'Congratulations! Registration Successful. You are now eligible to create Schedules for your Trainings.');
        return redirect()->route('trainer.dashboard');
    }

    public function update(Request $request) {
        // Validate Form
        $this->validate($request, [
            'organization'          =>  'sometimes',
            'description'           =>  'sometimes',
            'image_file'            =>  'sometimes|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'mobile_no'             =>  'sometimes',
            'post_code'             =>  'sometimes',
            'fax'                   =>  'sometimes',
            'price_range'           =>  'sometimes',
            'language'              =>  'sometimes',
        ]);

        $trainer                    =   Trainer::where('email', '=', Auth::user()->email)->first();

        $old_organization           =   $trainer->organization;
        $old_description            =   $trainer->description;
        $old_image_file             =   $trainer->image_file;
        $old_mobile_no              =   $trainer->mobile_no;
        $old_address                =   $trainer->address;
        $old_post_code              =   $trainer->post_code;
        $old_fax                    =   $trainer->fax;
        $old_price_range            =   $trainer->price_range;
        $old_language               =   $trainer->language;

        if($request->organization == null) {
            $trainer->organization  =   $old_organization;
        } else {
            $trainer->organization  =   $request->organization;
        }

        if($request->description == null) {
            $trainer->description   =   $old_description;
        } else {
            $trainer->description   =   $request->description;
        }

        if($request->mobile_no == null) {
            $trainer->mobile_no     =   $old_mobile_no;
        } else {
            $trainer->mobile_no     =   $request->mobile_no;
        }

        if($request->address == null) {
            $trainer->address       =   $old_address;
        } else {
            $trainer->address       =   $request->address;
        }

        if($request->post_code == null) {
            $trainer->post_code     =   $old_post_code;
        } else {
            $trainer->post_code     =   $request->post_code;
        }

        if($request->fax == null) {
            $trainer->fax           =   $old_fax;
        } else {
            $trainer->fax           =   $request->fax;
        }

        if($request->price_range == null) {
            $trainer->price_range   =   $old_price_range;
        } else {
            $trainer->price_range   =   $request->price_range;
        }

        if($request->language == null) {
            $trainer->language      =   $old_language;
        } else {
            $trainer->language      =   $request->language;
        }

        if($request->image_file   !=  null) {
            $image          = $request->image_file;
            $filenameWithExt = time() .'.'. $image->getClientOriginalExtension();
            $safe_path       = '/img/trainers/';
            $filenameToStore = $safe_path.$filenameWithExt;
            $image->move(public_path($safe_path), $filenameWithExt);
            if($old_image_file    !=  'no_image.jpg') {
                unlink(public_path($old_image_file));
            }
        } else {
            $filenameToStore            =       $old_image_file;
        }

        $trainer->image_file            =       $filenameToStore;

        $trainer->save();

        Session()->flash('trainer_update', 'Records Updated Successfully!');
        return back();
    }

}
