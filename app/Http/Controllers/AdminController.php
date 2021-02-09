<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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

    //Admin Profile
    public function adminProfile() 
    {
        Session::put('admin_page', 'profile');
    	$user = Admin::where('email', Auth::guard('admin')->user()->email)->first();
    	return view('backend.admin.profile', compact('user'));
    }

    //Update Admin Profile

    public function updateProfile(Request $request, $id)
    {
        $rules = [
            'email' => 'required|email',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required',
        ];

        $customMessage = [
            'email.required' => 'Email Address is required',
            'email.email' => 'Email Address must be valid email',
            'firstname.required' => 'First Name is required',
            'firstname.max' => 'First Name cannot be more than 255 chracters',
            'lastname.required' => 'Last Name is required',
            'lastname.max' => 'Last Name cannot be more than 255 chracters',
            'address.required' => 'Address is required',
            'address.max' => 'Address cannot be more than 255 chracters',
            'phone.required' => 'Phone Number is required',
        ];
        $this->validate($request, $rules, $customMessage);
        $user_id = Auth::guard('admin')->user()->id;
        $admin = Admin::findOrFail($user_id);
        $data = $request->all();
        $admin->firstname = ucwords(strtolower($data['firstname']));
        $admin->middlename = ucwords(strtolower($data['middlename']));
        $admin->lastname = ucwords(strtolower($data['lastname']));
        $admin->email = strtolower($data['email']);
        $admin->address = $data['address'];
        $admin->phone = $data['phone'];
        $random = Str::random(10);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $image_path = public_path('storage/' . $filename);
                Image::make($image_tmp)->save($image_path);
                $admin->image = $filename;
            }
        }
        $admin->save();
        $image_path = 'storage/';
        if ($data['current_image'] != "") {
            if (file_exists($image_path . $data['current_image'])) {
                if (!empty($data['image'])) {
                    if (file_exists($image_path . $admin->image)) {
                        unlink($image_path . $data['current_image']);
                    }
                }
            }
        }
        Session::flash('success_message', 'Profile has been updated successfully');
        return redirect()->back();
    }
}
