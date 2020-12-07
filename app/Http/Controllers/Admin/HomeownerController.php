<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\HomeOwner;
use App\User;
use App\Category;
use App\Contractor;
use App\RequestQuote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\feedbackSent;

class HomeownerController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

  public function allhomeowners(){
        $homeowners = HomeOwner::paginate(20);
        $categories = Category::all();
        return view('admin/all-homeowners')->with('homeowners', $homeowners)->with('categories', $categories);
    }

    public function homeownerdetails($id){
        $ahomeowner = HomeOwner::where('homeowner_id', $id)->first();
        $categories = Category::all();

        $contractors = Contractor::all();
        $requests = RequestQuote::where('homeowner_id',$ahomeowner->homeowner_id)->get();
        return view('admin/homeowner-details')->with('ahomeowner',$ahomeowner)->with('categories', $categories)->with('requests', $requests)->with('contractors',$contractors);

     }
     public function sendbids(Request $request){
        $homeowner_id = $request->homeowner_id;
        User::find($homeowner_id)->notify(new feedbackSent);
        return redirect()->back()->with('error','notification send success');
     }

}
