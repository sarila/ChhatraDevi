<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
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
            'about_us' => 'required',
            'excerpt' => 'required',
            'about_title' => 'required',
        ]);
        $data = $request->all();
        $setting->site_title = $data['site_title'];
        $setting->contact_number = $data['contact_number'];
        $setting->email = $data['email'];
        $setting->address = $data['address'];
        $setting->about_title = $data['about_title'];
        $setting->about_us = $data['about_us'];
        $setting->excerpt = $data['excerpt'];
        $setting->our_values = $data['our_values'];
        $setting->our_mission = $data['our_mission'];
        $setting->our_vision = $data['our_vision'];
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
                $header_logo_tmp = $request->file('header_logo');
                if ($header_logo_tmp->isValid()) {
                    $extension = $header_logo_tmp->getClientOriginalExtension();
                    $filename1 = $slug . '-' . $currentDate . '.' . $extension;
                    $path = 'storage/admin/theme/';
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path, 0777, true, true);
                    }
                    //code for remove old file
                    if($theme->header_logo != ''  && $theme->header_logo != null){
                       $file_old = $path.$theme->header_logo;
                       if (file_exists($file_old)) {
                            unlink($file_old);
                        }
                    }
                    $header_logo_path = public_path($path . $filename1);
                    Image::make($header_logo_tmp)->save($header_logo_path);
                }
            } else {
                $filename1 = $theme->header_logo;
            }
            $theme->header_logo = $filename1;
    

            $slug3 = Str::random(10);
            if ($request->hasFile('footer_logo')) {
                $footer_logo_tmp = $request->file('footer_logo');
                if ($footer_logo_tmp->isValid()) {
                    $extension = $footer_logo_tmp->getClientOriginalExtension();
                    $filename2 = $slug3 . '-' . $currentDate . '.' . $extension;
                    $path = 'storage/admin/theme/';
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path, 0777, true, true);
                    }
                    //code for remove old file
                    if($theme->footer_logo != ''  && $theme->footer_logo != null){
                       $file_old = $path.$theme->footer_logo;
                       if (file_exists($file_old)) {
                            unlink($file_old);
                        }
                    }
                    $footer_logo_path = public_path($path . $filename2);
                    Image::make($footer_logo_tmp)->save($footer_logo_path);
                }
            } else {
                $filename2 = $theme->footer_logo;
            }
            $theme->footer_logo = $filename2;

            $slug2 = "favicon";
            if ($request->hasFile('favicon')) {
                $favicon_tmp = $request->file('favicon');
                if ($favicon_tmp->isValid()) {
                    $extension = $favicon_tmp->getClientOriginalExtension();
                    $filename3 = $slug2 . '-' . $currentDate . '.' . $extension;
                    $path = 'storage/admin/theme/';
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path, 0777, true, true);
                    }
                    //code for remove old file
                    if($theme->favicon != ''  && $theme->favicon != null){
                       $file_old = $path.$theme->favicon;
                       if (file_exists($file_old)) {
                            unlink($file_old);
                        }
                    }
                    $favicon_path = public_path($path . $filename3);
                    Image::make($favicon_tmp)->save($favicon_path);
                }
            } else {
                $filename3 = $theme->favicon;
            }
            $theme->favicon = $filename3;
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
