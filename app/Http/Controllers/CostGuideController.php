<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Costguide;

class CostGuideController extends Controller
{
    public function index(){
        $categories = Category::all();
    	return view('links.costguide.index')->with('categories', $categories);

    	/*$costguides 	= 	Costguide::paginate(10);
        return view('costguide.data')->withCostguides($costguides); */
    }

    public function store(Request $request){
    	$this->validate($request, array(
            'name' 			=> 		'required|max:255',
            'category' 		=> 		'required|max:255',
            'slug' 			=> 		'required|alpha_dash|min:4|max:255',
            'title' 		=> 		'required|max:255',
            'body' 			=> 		'required',
        ));
        $costguides 			= 	new Costguide;
        $costguides->name 		= 	$request->name;
        $costguides->category 	= 	$request->category;
        $costguides->slug 		= 	$request->slug;
        $costguides->title 		= 	$request->title;
        $costguides->body 		= 	$request->body;
        $costguides->save();

        Session()->flash('success', 'Successfully Saved!');
        return redirect()->route('cost.index');
    }

    public function edit($id)
    {
        $costguides 	= 	Costguide::find($id);
        return view('costguide.edit')->withCostguides($costguides);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'name' 			=> 		'required|max:255',
            'category' 		=> 		'required|max:255',
            'slug' 			=> 		'required|alpha_dash|min:4|max:255',
            'title' 		=> 		'required|max:255',
            'body' 			=> 		'required',
        ));
        $costguides 			= 	Costguide::find($id);
        $costguides->name 		= 	$request->name;
        $costguides->category 	= 	$request->category;
        $costguides->slug 		= 	$request->slug;
        $costguides->title 		= 	$request->title;
        $costguides->body 		= 	$request->body;
        $costguides->save();

        Session()->flash('success', 'Successfully Updated!');
        return redirect()->route('cost.index');
    }

    public function destroy($id)
    {
        $costguides 	= 	Costguide::find($id);
        $costguides->delete();
        return redirect()->route('cost.index');
    }
}
