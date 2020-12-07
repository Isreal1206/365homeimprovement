<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Admin;
use App\Contractor;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContractorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $users = Admin::find($user_id);
        $categories = Category::all();
        return view('admin.contractor')->with('users', $users)->with('categories', $categories);
    }

    public function allcontractors(){
        $contractors = Contractor::paginate(10);
        $categories = Category::all();
        return view('admin/all-contractors')->with('contractors', $contractors)->with('categories', $categories);
    }
     public function contractordetails($id){
        $acontractor = Contractor::where('contractor_id', $id)->first();;
        $categories = Category::all();
        return view('admin/contractor-details')->with('acontractor',$acontractor)->with('categories', $categories);
     }
      public function deletecontractor($id){
        $contractor = Contractor::where('id',$id)->first();
        $users = User::where('email', '=', $contractor->email)->first();
        $users->delete();
        $contractor->delete();
        return redirect()->back()->with('success','successfully deleted');
    }
}
