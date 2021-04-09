<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    public function login()
    {
    	return view('backend.admin.login');
    }

    public function adminLogin(Request $request)
    {
        $data = $request->all();
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $customMessages = [
            'email.required' => 'Email Address is Required',
            'email.email' => 'Email Address must be a valid email',
            'password.required' => 'Password is required',
        ];

        $this->validate($request, $rules, $customMessages);

        if (Auth::guard('admin')->attempt(['email' => $data['email'],
         'password' => $data['password']])) {
            return redirect()->route('admin.dashboard');
        } else {
            Session::flash('error_message', 'Invalid Email or Password');
            return redirect()->route('admin.login');
        }
    }

    public function adminDashboard()
    {
        Session::put('admin_page', 'dashboard');
        return view('backend.admin.dashboard');
    }

    public function forgetPassword()
    {
        return view('backend.admin.forgetPassword');
    }
}
