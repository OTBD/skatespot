<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use Storage;

class UserController extends Controller
{


    public function profile() {
        return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request) {
        //handle uploads
        $user   = Auth::user();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $path   = public_path('uploads/profile_pictures/'. $filename );

            //this is the path your file goes to, dont fuckin delete

            // $path   = public_path('uploads/profile_pictures/'. $user->username .'/'. $filename );

            // i need to create this directory and then save the image to it
            // Storage::MakeDirectory(public_path('uploads/profile_pictures/'.$path));

            Image::make($avatar->getRealPath())->resize(300, 300)->save($path);

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );

    }

    public function update_header(Request $request) {
        //handle uploads
        if($request->hasFile('header')){
            $header = $request->file('header');
            $filename = time() . '.' . $header->getClientOriginalExtension();
            Image::make($header)->resize(825, 300)->save( public_path('/uploads/profile_headers/' . $filename ) );

            $user = Auth::user();
            $user->header = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );

    }

    public function index()
   {
       $user = DB::table('user')->get();
   }

}
