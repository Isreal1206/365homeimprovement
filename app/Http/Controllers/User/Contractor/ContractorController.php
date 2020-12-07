<?php

namespace App\Http\Controllers\User\Contractor;

use Auth;
use App\User;
use App\Category;
use App\Contractor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContractorController extends Controller
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
        $categories    =    Category::all();
        $contractors   =    Contractor::where('email', Auth::user()->email)->first();
        
        return view('user.contractors.contractor')->with('categories', $categories)->with('contractors', $contractors);
    }

    public function register() {
        $categories = Category::all();
        return view('user.contractors.contractor-register')->with('categories', $categories);
    }

    public function create(Request $request) {
        // Validate Form
        $this->validate($request, [
            'fullnames'         =>      'required|string|max:255',
            'email'             =>      'required|email|max:255',
            'company_name'      =>      'required|string|max:255',
            'job_category'      =>      'required|string',
            'mobile_no'         =>      'required|string|min:6|max:25',
            'address'           =>      'required|string|max:255',
            'state'             =>      'required|string',
            'lga'               =>      'required|string',
            'description'       =>      'required|string',
            'banner'            =>      'required|max:2048|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $contractors                     =   new Contractor;
        $contractors->contractor_id      =   $request->contractor_id;
        $contractors->fullnames          =   $request->fullnames;
        $contractors->email              =   $request->email;
        $contractors->company_name       =   $request->company_name;
        $contractors->job_category       =   $request->job_category;
        $contractors->mobile_no          =   $request->mobile_no;
        $contractors->address            =   $request->address;
        $contractors->state              =   $request->state;
        $contractors->lga                =   $request->lga;
        $contractors->description        =   $request->description;

        $photo              =   $request->banner;
        $filenameWithExt    =   time() .'.'. $photo->getClientOriginalExtension();
        $safe_path          =   '/img/contractors/';
        $filenameToStore    =   $safe_path.$filenameWithExt;
        $photo->move(public_path($safe_path), $filenameWithExt);

        $contractors->banner        =   $filenameToStore;
        $contractors->save();

        $contractors                =   Contractor::where('email', Auth::user()->email)->first();
        $contractors->url           =   $request->url . $contractors->contractor_id;
        $contractors->save();

        $id                         =   Auth::user()->id;
        $users                      =   User::find($id);
        $users->status              =   "1";
        $users->save();

        Session()->flash('contractor_register', 'Registration Successful!');
        return redirect()->route('contractor.dashboard');
    }

    public function update(Request $request) {
        // Validate Form
        $this->validate($request, [
            'fullnames'     =>      'sometimes',
            'company_name'  =>      'sometimes',
            'mobile_no'     =>      'sometimes',
            'address'       =>      'sometimes',
            'state'         =>      'sometimes',
            'lga'           =>      'sometimes',
            'description'   =>      'sometimes',
            'banner'        =>      'sometimes|max:2048|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $contractor             =   Contractor::where('email', Auth::user()->email)->first();

        $old_fullnames          =   $contractor->fullnames;
        $old_company_name       =   $contractor->company_name;
        $old_mobile_no          =   $contractor->mobile_no;
        $old_address            =   $contractor->address;
        $old_state              =   $contractor->state;
        $old_lga                =   $contractor->lga;
        $old_description        =   $contractor->description;
        $old_banner             =   $contractor->banner;

        if($request->fullnames == null) {
            $contractor->fullnames      =       $old_fullnames;
        } else {
            $contractor->fullnames      =       $request->fullnames;
        }

        if($request->company_name == null) {
            $contractor->company_name   =   $old_company_name;
        } else {
            $contractor->company_name   =   $request->company_name;
        }

        if($request->mobile_no == null) {
            $contractor->mobile_no      =   $old_mobile_no;
        } else {
            $contractor->mobile_no      =   $request->mobile_no;
        }

        if($request->address == null) {
            $contractor->address        =   $old_address;
        } else {
            $contractor->address        =   $request->address;
        }

        if($request->state == null) {
            $contractor->state          =   $old_state;
        } else {
            $contractor->state          =   $request->state;
        }

        if($request->lga == null) {
            $contractor->lga            =   $old_lga;
        } else {
            $contractor->lga            =   $request->lga;
        }

        if($request->description == null) {
            $contractor->description    =   $old_description;
        } else {
            $contractor->description    =   $request->description;
        }

        if($request->banner  !=  null) {
            $photo           = $request->banner;
            $filenameWithExt = time() .'.'. $photo->getClientOriginalExtension();
            $safe_path       = '/img/contractors/';
            $filenameToStore = $safe_path.$filenameWithExt;
            $photo->move(public_path($safe_path), $filenameWithExt);
            unlink(public_path($old_banner));
        } else {
            $filenameToStore            =       $old_banner;
        }

        $contractor->banner             =       $filenameToStore;
        $contractor->save();

        Session()->flash('contractor_update', 'Records Updated Successfully!');
        return back();
    }

}
