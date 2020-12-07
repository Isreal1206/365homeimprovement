<?php

namespace App\Http\Controllers\User\Marketer;

use Auth;
use App\User;
use App\MarketCategory;
use App\Marketer;
use App\category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarketerController extends Controller
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
        $user_id        =    auth()->user()->id;
        $users          =    User::find($user_id);
        $categories     =    MarketCategory::all();
        $marketers      =    Marketer::all();
        
        return view('user.marketers.marketer')->with('users', $users)->with('categories', $categories)->with('marketers', $marketers);
    }

    public function register() {
        return view('user.marketers.marketer-register');
    }

    public function create(Request $request) {
        // Validate Form
        $this->validate($request, [
            'fullnames'         =>  'required|string|max:255',
            'email'             =>  'required|email|max:255',
            'company_name'      =>  'required|string|max:255',
            'category'          =>  'required|string',
            'address'           =>  'required|string|max:255',
            'mobile_no'         =>  'required|string',
            'website'           =>  'sometimes'
        ]);

        $marketer                   =   new Marketer;
        $marketer->marketer_id      =   $request->marketer_id;
        $marketer->fullnames        =   $request->fullnames;
        $marketer->email            =   $request->email;
        $marketer->company_name     =   $request->company_name;
        $marketer->category         =   $request->category;
        $marketer->address          =   $request->address;
        $marketer->mobile_no        =   $request->mobile_no;
        $marketer->save();

        $marketer                   =   Marketer::where('email', Auth::user()->email)->first();
        $marketer->website          =   $request->website . $marketer->marketer_id;
        $marketer->save();

        $users                      =   User::where('email', '=', $marketer->email)->first();
        $users->status              =   "1";
        $users->save();

        Session()->flash('marketer_register', 'Registration Successful!');
        return redirect()->route('marketer.dashboard');
    }

    public function update(Request $request) {
        // Validate Form
        $this->validate($request, [
            'logo'          =>  'sometimes|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'company_name'  =>  'sometimes|max:255',
            'phone'         =>  'sometimes',
            'address'       =>  'sometimes|max:255',
            'description'   =>  'sometimes|max:255',
            'body'          =>  'sometimes',
        ]);

        $id                     =       auth()->user()->id;
        $marketer               =       Marketer::find($id);

        $oldfullnames           =       $marketer->fullnames;
        $old_email              =       $marketer->email;
        $old_company_name       =       $marketer->company_name;
        $old_category           =       $marketer->category;
        $old_address            =       $marketer->address;
        $old_mobile_no          =       $marketer->mobile_no;

        if($request->fullnames == null) {
            $marketer->fullnames      =       $oldfullnames;
        } else {
            $marketer->fullnames      =       $request->fullnames;
        }

        if($request->email == null) {
            $marketer->email          =   $old_email;
        } else {
            $marketer->email          =   $request->email;
        }
        
        if($request->company_name == null) {
            $marketer->company_name   =   $old_company_name;
        } else {
            $marketer->company_name   =   $request->company_name;
        }

        if($request->category == null) {
            $marketer->category       =   $old_category;
        } else {
            $marketer->category       =   $request->category;
        }

        if($request->address == null) {
            $marketer->address        =   $old_address;
        } else {
            $marketer->address        =   $request->address;
        }

        if($request->mobile_no == null) {
            $marketer->mobile_no      =   $old_mobile_no;
        } else {
            $marketer->mobile_no      =   $request->mobile_no;
        }

        $marketer->save();

        Session()->flash('marketer_update', 'Update Successful!');
        return back();
    }

    public function products() 
    {
        $marketer   = Marketer::where('email', Auth::user()->email)->first();
        $categories = Category::all();
        $products = Product::select('products.image_file')->where('marketer_id', $marketer->marketer_id)->get();

        return view('user.marketers.upload-product')->with('marketer', $marketer)->with('categories', $categories)->with('products', $products);
    }

    public function products_create(Request $request) 
    {
        // Validate Form
        $this->validate($request, [
            'name'              =>  'required',
            'subcategory'       =>  'required|string',
            'description'       =>  'required',
            'price'             =>  'required',
            'manufacturer'      =>  'required',
            'policy'            =>  'required',
            'available'         =>  'required',
            'image_file'        =>  'sometimes|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $products                 =   new Product;
        $products->marketer_id    =   $request->marketer_id;
        $products->name           =   $request->name;
        $products->category       =   $request->category;
        $products->subcategory    =   $request->subcategory;
        $products->description    =   $request->description;
        $products->price          =   $request->price;
        $products->manufacturer   =   $request->manufacturer;
        $products->policy         =   $request->policy;
        $products->available      =   $request->available;

        if($request->image_file   !=  null) {
            $avatar          = $request->image_file;
            $filenameWithExt = time() .'.'. $avatar->getClientOriginalExtension();
            $safe_path       = '/img/marketers/products/';
            $filenameToStore = $safe_path.$filenameWithExt;
            $avatar->move(public_path($safe_path), $filenameWithExt);
        }

        $products->image_file      =       $filenameToStore;
        $products->save();        

        Session()->flash('success', 'Thank you! Image Upload Successful.');
        return back();
    }
    
}
