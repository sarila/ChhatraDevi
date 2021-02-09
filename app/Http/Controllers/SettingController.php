<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index(){
    	$setting = Setting::first();
    	return view('backend.admin.setting', compact('setting'));
    }

    public function updateSetting(Request $request, $id){
	    $setting = Setting::findOrFail($id);
        $validateData = $request->validate([
            'site_title' => 'required|max:255',
            'contact_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
        $data = $request->all();
        $setting->site_title = $data['site_title'];
        $setting->contact_number = $data['contact_number'];
        $setting->email = $data['email'];
        $setting->address = $data['address'];
        $setting->save();
        Session::flash('success_message', 'Settings has been updated successfully');
        return redirect()->back();
    }

    public function theme(){
        $theme = Theme::first();
        return view('backend.admin.theme', compact('theme'));
    }

    public function updateTheme(Request $request, $id){
        $theme = Theme::first();
        if ($request->isMethod('post')) {
            $theme = Theme::first();
            $data = $request->all();
            $theme->website_name = $data['website_name'];
            $slug = Str::slug($data['website_name']);
            $currentDate = Carbon::now()->toDateString();

            if ($request->hasFile('header_logo')) {
                $image_tmp = $request->file('header_logo');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = $slug . '-' . $currentDate . '.' . $extension;
                    $image_path = 'storage/' . $filename;
                    // Resize Image Code
                    Image::make($image_tmp)->save($image_path);
                    // Store image name in products table
                    $theme->header_logo = $filename;
                }
            }

            $slug3 = Str::random(10);
            if ($request->hasFile('footer_logo')) {
                $image_tmp = $request->file('footer_logo');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = $slug3 . '-' . $currentDate . '.' . $extension;
                    $image_path = 'storage/' . $filename;
                    Image::make($image_tmp)->save($image_path);
                    $theme->footer_logo = $filename;
                }
            }

            $slug2 = "favicon";
            if ($request->hasFile('favicon')) {
                $image_tmp = $request->file('favicon');
                if ($image_tmp->isValid()) {
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = $slug2 . '-' . $currentDate . '.' . $extension;
                    $image_path = 'storage/' . $filename;
                    Image::make($image_tmp)->save($image_path);
                    $theme->favicon = $filename;
                }
            }
            $theme->save();
            Session::flash('success_message', 'Theme Settings has been saved successfully');
            return redirect()->back();
        }
    }

    public function social(){
        $setting = Setting::first();
        return view ('backend.admin.social', compact('setting'));

    }

    public function socialUpdate(Request $request, $id){
            $setting = Setting::findOrFail($id);
            $data = $request->all();
            $setting->facebook = $data['facebook'];
            $setting->twitter = $data['twitter'];
            $setting->youtube = $data['youtube'];
            $setting->instagram = $data['instagram'];
            $setting->save();
            Session::flash('info_message', 'Social Settings has been updated successfully');
            return redirect()->back();
    }

}
