<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contractor;
use App\Category;
use App\MarketCategory;
use App\Trainer;
use App\HomeOwner;
use App\Marketer;
use App\Product;
use App\Costguide;
use App\Admin;
use Auth;
use Image;
use App\Blog;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function addadmin(request $request){
        $this->validate($request, [
            'name'             =>  'required|string',
            'email'         =>  'required|string' ,
            'password'             =>  'required|string',
        ]);

        $admins = new Admin;
        $admins->name = $request->input('name');
        $admins->email = $request->input('email');
        $admins->password = bcrypt($request->input('password'));
           
        $categories = Category::paginate(20);
        $admins = Admin::all();
        return view('admin/admin-list')->with('admins',$admins)->with('categories', $categories);

    }

    public function adminindex(){
        $categories = Category::paginate(20);
        return view('admin/dashboard')->with('categories', $categories);
    }
    
    public function alltrainers(){
        $trainers = Trainer::paginate(10);
        $categories = Category::all();
        return view('admin/all-trainers')->with('trainers', $trainers)->with('categories', $categories);

    }
    
    public function allmarketers(){
        $marketers = Marketer::paginate(10);
        $categories = Category::all();
        return view('admin/all-marketers')->with('marketers', $marketers)->with('categories', $categories);
    }

    public function category(){
        $categories = Category::paginate(20);
        
        return view('admin/categories')->with('categories', $categories);
    }

    public function costguide(){
        $categories = Category::all();
        $costguides = Costguide::paginate(10);
        return view('admin/cost-guide')->with('categories', $categories)->with('costguides', $costguides);
    }

    public function costguidestore(request $request){
        $this->validate($request, array(
            'author'     =>  'required|string|max:255',
            'title'      =>  'required',
            'category'   =>  'required|string|',
            'body'       =>  'required',
            'image_file' =>  'required|mimes:jpg,jpeg,png|max:1999'
        ));

        $costguide             =   new Costguide;
        $costguide->author     =   $request->author;
        $costguide->title      =   $request->title;
        $costguide->category   =   $request->category;
        $costguide->body       =   $request->body;
        // Handle File Upload
       if($request->image_file != null) {
            $image          = $request->image_file;
            $filenameWithExt = time().'.'.$image->getClientOriginalExtension();
            $safe_path       = '/img/costguides/';
            $fileNameToStore = $safe_path.$filenameWithExt;
            $image->move(public_path('/img/costguides/'), $filenameWithExt);
        } 

        $costguide->image_file     = $fileNameToStore;     
        $costguide->save();

        Session()->flash('success', "Saved Successfully!");
        return back();
    }

    public function costguideupdate(request $request, $id){
         $this->validate($request, array(
            'author'            =>  'sometimes|max:255',
            'title'             =>  'sometimes',
            'category'          =>  'sometimes',
            'body'              =>  'sometimes',
            'image_file'        =>  'sometimes|max:2048'
        ));

        $costguide              =   Costguide::findOrFail($id);
        $old_author             =   $costguide->author;
        $old_title              =   $costguide->title;
        $old_category           =   $costguide->category;
        $old_body               =   $costguide->body;
        $old_image_file         =   $costguide->image_file;

        if($request->author == null) {
            $costguide->author     =       $old_author;
        } else {
            $costguide->author     =       $request->author;
        }
        
        if($request->title == null) {
            $costguide->title     =       $old_title;
        } else {
            $costguide->title     =       $request->title;
        }

        if($request->category == null) {
            $costguide->category     =       $old_category;
        } else {
            $costguide->category     =       $request->category;
        }

        if($request->body == null) {
            $costguide->body     =       $old_body;
        } else {
            $costguide->body     =       $request->body;
        }
        
        if($request->image_file != null) {
            $image              =   $request->image_file;
            $filenameWithExt    =   time().'.'.$image->getClientOriginalExtension();
            $safe_path          =   '/img/costguides/';
            $fileNameToStore    =   $safe_path.$filenameWithExt;
            $image->move(public_path('/img/costguides/'), $filenameWithExt);
            unlink(public_path($old_image_file));
        }
        else {
            $fileNameToStore    =   $old_image_file;
        }

        $costguide->image_file  = $fileNameToStore;
        //dd($costguide);
        $costguide->save();

        Session()->flash('success', "Updated Successfully!");
        return back();

    }

    public function articleshow(){
        $categories = Category::all();
        $articles   = Blog::paginate(10);
        return view('admin/all-articles')->with('articles', $articles)->with('categories', $categories);
    }

    public function articledetails($id){
        $atrainer       =   Blog::findOrFail($id);
        $categories     =   Category::all();
        return view('admin/trainer-details')->with('atrainer',$atrainer)->with('categories', $categories);
    }


    public function trainerdetails($id){
        $atrainer       =   Trainer::where('trainer_id', $id)->first();
        $categories     =   Category::all();
        return view('admin/trainer-details')->with('atrainer',$atrainer)->with('categories', $categories);
    }

    public function marketerdetails($id) {
        $amarketer      =   Marketer::where('marketer_id', $id)->first();
        $categories     =   Category::all();
        $marketerpro    =   Product::where('marketer_id', $amarketer->marketer_id)->get();
        return view('admin/marketer-details')->with('amarketer',$amarketer)->with('categories', $categories)->with('marketerpro',$marketerpro);
    }
     
    public function costguidedetails($id) {
        $acostguide = Costguide::find($id);
        $categories = Category::paginate(20);
        return view('admin/costguide-details')->with('acostguide',$acostguide)->with('categories', $categories);
    }

    public function adminusers(){
        $admins = Admin::paginate(10);
        return view('admin/admin-list')->with('admins', $admins);
    }

    public function deletecostguide($id) {
        Costguide::findOrFail($id)->delete();
        //Costguide::where('id',$id)->delete();
        return redirect()->back()->with('success','Costguide successfully deleted');
    }
    
}
