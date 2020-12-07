<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Admin;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
    	$categories = Category::orderBy('created_at','asc')->paginate(15);
    	return view('admin.categories')->with('categories', $categories);
    }

    public function create(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'slug' => 'required|string|alpha_dash|min:5|max:255',
        ));

        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        Session()->flash('success', "Success!");
        return back();
    }

    public function update(Request $request, $id) {
        $this->validate($request, array(
            'name' => 'required|string|max:255',
            'slug' => 'required|string|alpha_dash|min:5|max:255',
        ));

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        Session()->flash('success', "Saved!");
        return back();
    }

    public function delete($id) {
        Category::findOrFail($id)->delete();
        //MarketCategory::where('id', $id)->delete();
        return redirect()->back()->with('success','Successfully deleted');
    }

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

}
