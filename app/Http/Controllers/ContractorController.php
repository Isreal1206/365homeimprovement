<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Category;
use App\Contractor;
use Illuminate\Http\Request;

class ContractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $contractors = Contractor::all();
        
        return view('links.contractor.index')->withContractors($contractors)->withCategories($categories);
    }

    public function show($slug)
    {
        $categories = Category::all();
        $contractors = Contractor::where('contractor_id', '=', $slug)->first();
        return view('links.contractor.template')->withContractors($contractors)->withCategories($categories);
        //return $slug;
    }

}
