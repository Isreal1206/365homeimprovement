<?php

namespace App\Http\Controllers\User\Contractor;

use Auth;
use Session;
use App\User;
use App\Category;
use App\Contractor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->middleware(['auth', 'verified']);
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
        $contractors   =    Contractor::all();
        return view('user.contractors.dashboard')->with('contractors', $contractors);
    }

    public function plans()
    {
        $contractors   =    Contractor::where(['email' => Auth::user()->email])->first();

        return view('user.contractors.plans')->with('contractors', $contractors);
    }
}
