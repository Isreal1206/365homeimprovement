<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Trainer;
use Auth;

class TrainingController extends Controller
{
    public function index()
    {
    	$trainings     =   Trainer::all();
        $categories    =   Category::all();
        return view('links.training.index')->with('trainings', $trainings)->with('categories', $categories);
    }

    public function trainer($id)
    {
        $categories     =   Category::all();
        $training       =   Trainer::all();
        $trainings      =   Trainer::where('trainer_id', '=', $id)->first();
        
        return view('links.training.trainer')->with('training', $training)->with('trainings', $trainings)->with('categories', $categories);
    }

}
