<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Image;
use File;
class UserController extends Controller
{
    function index(){
        $userData = User::find(Auth::User()->id);

        return view("index",compact("userData"));
    }
    function updateUser(Request $request){
        $userData= User::find(Auth::User()->id);

       if($request->image){
        if(File::exists(public_path('uploads/user/').$userData->profile_pic)){
            File::delete(public_path('uploads/user').$userData->profile_pic);
        }
        $image =$request->file('image');
        $customName = rand().".".$image->getClientOriginalExtension();
        $path =public_path('uploads/user/'.$customName);
        Image::make($image)->resize(150,150)->save($path);
        $userData->profile_pic =$customName;
       }
       $userData->name = $request->name;
       $userData->userName = $request->userName;
       $userData->email = $request->email;
       $userData->phone = $request->phone;
       $userData->address = $request->address;

       $userData->update();
       return back();

    }
    function userLogout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');


    }
}
