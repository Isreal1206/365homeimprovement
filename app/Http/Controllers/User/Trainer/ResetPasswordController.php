<?php

namespace App\Http\Controllers\User\Trainer;

use Hash;
use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    // use ResetsPasswords;

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
    
    public function reset(Request $request)
    {
        // Validate Form
        $this->validate($request, [
            'cpassword' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if(!(Hash::check($request->get('cpassword'), Auth::user()->password))){
            // The Password Matches
            return redirect()->back()->with("error", "Your current password does not matches with the password you provided. Please try again!");
        }

        if(strcmp($request->get('cpassword'), $request->get('password')) == 0){
            // Current Password and New Password are same
            return redirect()->back()->with("error", "New Password cannot be same as your Current Password. Please choose a different password!");
        }

        // Change Password
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->password = bcrypt($request->get('password'));
        $user->save();

        // Redirect
        Session::flash('resetPassword', 'Password has been Reset Successfully.');
        return back();
    }

}
