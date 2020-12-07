<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Marketer;
use App\Category;
use App\Contractor;
use App\RequestQuote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarketerController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function marketerstatus(Request $request){
    	$marketer_id = $request->marketer_id;
    	$idToCheck = Marketer::where('id', $marketer_id)->first();

    	if($idToCheck->status == 'unapproved'){
    		$idToCheck->status = 'approved';
    	}
    	else{
    		$idToCheck->status = 'unapproved';
    	}
        
    	$idToCheck->save();
    	return redirect()->back();
    }

}