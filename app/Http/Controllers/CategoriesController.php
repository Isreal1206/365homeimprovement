<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Category;
use App\Contractor;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show($slug){
    	$categories 	= Category::where('slug', '=', $slug)->first();
    	$contractors 	= Contractor::where('job_category', $categories->name)->get();
    	
    	return view('links.categories.template')->withCategories($categories)->withContractors($contractors);
    }
}
