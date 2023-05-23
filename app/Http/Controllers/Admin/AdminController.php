<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Hash;

class AdminController extends Controller
{
    function index(){
        return view('admin.dashboard');
    }
    function login(){
        return view('admin.adminlogin');
    }

    function logout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('admin/login');
    }
    function profile(){
        $adminInfo = User::find(Auth::user()->id);
        return view('admin.profile',compact(('adminInfo')));
    }
    function updateProfile (Request $request){
        $adminData = User::find(Auth::user()->id);
        $adminData->name = $request->name;
        $adminData->userName= $request->userName;
        $adminData->email= $request->email;
        $adminData->phone= $request->phone;
        $adminData->address= $request->address;

        if($request->image){
            $image = $request->file('image');
            $customName = rand().'.'.$image->getClientOriginalExtension();
            @unlink(public_path('uploads/admin/'. $adminData->profile_pic));
            $image->move(public_path('uploads/admin/'),$customName);
            $adminData->profile_pic = $customName;

        }
        $adminData->update();
        return back();
    }
    function changePassword(){
        return view('admin.changepassword');
    }
    function updatePassword( Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'

        ]);
        //find user
        $find = User::find(Auth::user()->id);
        //password match
        if(!Hash::check($request->old_password, $find->password)){

          return back()->with('error','old password does not Match');
        };
        //update password
        $find->password = Hash::make($request->new_password);
        $find->update();
        return back()->with('successStatus',"Password Changed");

    }

}
