<?php

namespace App\Http\Controllers\User\Trainer;

use Auth;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
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
        $user_id                =       Auth::user()->id;
        $users                  =       User::find($user_id);
        $categories             =       Category::all();
        return view('user.profile')->with('users', $users)->with('categories', $categories);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'avatar'            =>    'sometimes|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $id                     =       Auth::user()->id;
        $user                   =       User::find($id);

        $old_avatar             =       $user->avatar;
        $defaultImage           =       '/img/avatar/avatar.png';

        if($request->avatar != null) {
            $avatar          = $request->avatar; //request()->avatar;
            $filenameWithExt = time() .'.'. $avatar->getClientOriginalExtension();
            $safe_path       = '/img/avatar/';
            $fileNameToStore = $safe_path.$filenameWithExt;
            $avatar->move(public_path('/img/avatar/'), $filenameWithExt);
            if($old_avatar != $defaultImage) {
                unlink(public_path($old_avatar));
            }
        } else {
            $fileNameToStore    =       $defaultImage;
        }

        $user->avatar           =       $fileNameToStore;
        $user->save();

        Session()->flash('success', 'You have successfully updated your profile.');
        return redirect()->route('trainer.profile');
    }

}
