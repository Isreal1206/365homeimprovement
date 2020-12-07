<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Admin;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
	public function index()
    {
        $user_id = auth()->user()->id;
        $admins = Admin::find($user_id);
        $categories = Category::all();
        return view('admin.profile')->with('admins', $admins)->with('categories', $categories);
    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'firstname'         =>     'sometimes|max:100',
            'lastname'          =>     'sometimes|max:100',
            'mobile'            =>     'sometimes|max:50',
            'address'           =>     'sometimes|max:255',
            'avatar'            =>     'sometimes|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $id                     =       Auth::user()->id;
        $user                   =       Admin::find($id);

        $oldfirstname           =       $user->firstname;
        $oldlastname            =       $user->lastname;
        $oldmobile              =       $user->mobile;
        $oldaddress             =       $user->address;

        if($request->firstname == null) {
            $user->firstname    =       $oldfirstname;
        } else {
            $firstname          =       $request->firstname;
            $user->firstname    =       $firstname;
        }
        
        if($request->lastname == null) {
            $user->lastname     =       $oldlastname;
        } else {
            $lastname           =       $request->lastname;
            $user->lastname     =       $lastname;
        }

        if($request->mobile == null) {
            $user->mobile       =       $oldmobile;
        } else {
            $mobile             =       $request->mobile;
            $user->mobile       =       $mobile;
        }

        if($request->address == null) {
            $user->address      =       $oldaddress;
        } else {
            $address            =       $request->address;
            $user->address      =       $address;
        }

        $defaultImage           =       '/img/avatar/avatar.png';
        if($request->avatar != null) {
            $oldfilename     = $user->avatar;
            $avatar          = $request->avatar;
            $filenameWithExt = time().'.'.request()->avatar->getClientOriginalExtension();
            $safe_path       = '/img/avatar/';
            $fileNameToStore = $safe_path.$filenameWithExt;
            $avatar->move(public_path('/img/avatar/'), $filenameWithExt);
            if($oldfilename != $defaultImage) {
                unlink(public_path($oldfilename));
            }
        } else {
            $fileNameToStore    =       $defaultImage;
        }

        $user->avatar           =       $fileNameToStore;
        $user->save();

        Session()->flash('success', 'You have successfully updated your profile.');
        return back();
    }

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
}

