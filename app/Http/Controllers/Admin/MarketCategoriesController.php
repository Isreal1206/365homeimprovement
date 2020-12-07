<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Admin;
use App\MarketCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarketCategoriesController extends Controller
{
    public function index()
    {
    	$categories = MarketCategory::orderBy('created_at','asc')->paginate(100);
    	return view('admin.market-categories')->with('categories', $categories);
    }

    public function create(Request $request)
    {
        $this->validate($request, array(
            'name' 			=> 	'required|string|max:255',
            'sub_name'		=> 	'required|string|max:255',
            'slug' 			=> 	'required|string|min:5|max:255',
        ));

        $category 			= 	new MarketCategory;
        $category->name 	= 	$request->name;
        $category->sub_name = 	$request->sub_name;
        $category->slug 	= 	$request->slug;
        $category->save();

        Session()->flash('success', "Success!");
        return back();
    }

    public function update(Request $request, $id) {
        $this->validate($request, array(
            'name' 		    => 	'required|string|max:255',
            'sub_name' 	    => 	'required|string|max:255',
            'slug' 		    => 	'required|string|min:5|max:255',
        ));

        $category 			= 	MarketCategory::findOrFail($id);
        $category->name 	= 	$request->name;
        $category->sub_name = 	$request->sub_name;
        $category->slug 	= 	$request->slug;
        $category->save();

        Session()->flash('success', "Saved!");
        return back();
    }

    public function delete($id) {
        MarketCategory::findOrFail($id)->delete();
        //MarketCategory::where('id', $id)->delete();
        return redirect()->back()->with('success','Successfully deleted');
    }

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

}
