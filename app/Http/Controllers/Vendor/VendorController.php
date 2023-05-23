<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Hash;

class VendorController extends Controller
{
    function index(){
        return view('vendor.dashboard');
    }
    function login(){
        return view('vendor.vendorlogin');
    }

    function logout(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('vendor/login');
    }
    function profile(){
        $vendorInfo = User::find(Auth::user()->id);
        return view('vendor.profile',compact(('vendorInfo')));
    }
    function updateProfile (Request $request){
        $vendorData = User::find(Auth::user()->id);
        $vendorData->name = $request->name;
        $vendorData->userName= $request->userName;
        $vendorData->email= $request->email;
        $vendorData->phone= $request->phone;
        $vendorData->address= $request->address;

        if($request->image){
            $image = $request->file('image');
            $customName = rand().'.'.$image->getClientOriginalExtension();
            @unlink(public_path('uploads/vendor/'. $vendorData->profile_pic));
            $image->move(public_path('uploads/vendor/'),$customName);
            $vendorData->profile_pic = $customName;

        }
        $vendorData->update();
        return back();
    }
    function changePassword(){
        return view('vendor.changepassword');
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
