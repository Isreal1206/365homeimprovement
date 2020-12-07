<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation.
    |
    */

    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	return view('auth.admin-register');
    }

    public function create(Request $request)
    {
    	$this->validate($request, [
    		'username'			=>	'required|string|max:100',
    		'email'				=>	'required|string|email|max:255|unique:admins',
    		'password'			=>	'required|string|min:6|confirmed'
    	]);	

    	$admin = new Admin;
    	$admin->username 		=	$request->username;
    	$admin->email 			=	$request->email;
    	$admin->password 		=	Hash::make($request->password);
    	$admin->save();

    	/**
	     * Where to redirect admin user after registration.
	     *
	     * @var string
	     */

    	return redirect()->route('admin.login');
    }

}

