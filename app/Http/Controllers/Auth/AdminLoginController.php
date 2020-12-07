<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//Validate the form data
    	$this->validate($request, [
    		'email'			=>		'required|string|email|max:255',
    		'password'		=>		'required|string|min:6'
    	]);

    	//Attempt to login user
    	if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    		//if successful, then redirect to the intended location
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	//if unsuccessful, then redirect back to the login with the form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function adminlogout(Request $request)
    {
    	Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('adminlogout');
    }
}
