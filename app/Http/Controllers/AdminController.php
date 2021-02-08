<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function changePassword()
    {
    	$user = Admin::where('email', Auth::guard('admin')->user()->email)->first();
    	return view('backend.admin.changePassword', compact('user'));
    }
    
    // Checking User Current Password
    public function checkPassword(Request $request)
    {
        $data = $request->all();
        $current_password = $data['current_password'];
        $user_id = Auth::guard('admin')->user()->id;
        $check_password = Admin::where('id', $user_id)->first();
        if (Hash::check($current_password, $check_password->password)) {
            return "true";
            die;
        } else {
            return "false";
            die;
        }
    }

   // Update Password
    public function updatePassword(Request $request, $id)
    {
        $validateData = $request->validate([
            'current_password' => 'required|max:255',
            'password' => 'min:6',
            'pass_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        $user = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        $current_user_password = $user->password;
        $data = $request->all();
        if (Hash::check($data['current_password'], $current_user_password)) {
            $user->password = bcrypt($data['password']);
            $user->save();
            Session::flash('info_message', 'Password has been updated successfully');
            return redirect()->back();
        } else {
            Session::flash('error_message', 'Your current password does not match with our database');
            return redirect()->back();
        }
    }
}
