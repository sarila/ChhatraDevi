<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('admin_page', 'slider');
        $sliders = Slider::all();
        return view('backend.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('admin_page', 'slider');
        return view('backend.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'slider_image' => 'required',
        ]);
        $data = $request->all();
        $slider = new Slider();
        $slider->title = $data['title'];
        $slider->description = $data['description'];
        $slider->link = $data['link'];
        $random = Str::random(10);
        if ($request->hasFile('slider_image')) {
           $slider_tmp = $request->file('slider_image');
            if ($slider_tmp->isValid()) {
                $extension = $slider_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/slider/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $slider_path = public_path($path . $filename);
                Image::make($slider_tmp)->save($slider_path);
                $slider->slider_image = $filename;
            }
        }
        $slider->save();
        Session::flash('success_message', 'Slider has been Added');
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        Session::put('admin_page', 'slider');
        return view('backend.sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        Session::put('admin_page', 'slider');
        return view('backend.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $data = $request->all();
        $slider->title = $data['title'];
        $slider->description = $data['description'];
        $slider->link = $data['link'];
        $random = Str::random(10);
        if ($request->hasFile('slider_image')) {
           $slider_tmp = $request->file('slider_image');
            if ($slider_tmp->isValid()) {
                $extension = $slider_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/slider/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }

                 //code for remove old file
                if($slider->slider_image != ''  && $slider->slider_image!= null){
                   $file_old = $path.$slider->slider_image;
                   unlink($file_old);
                }
                $slider_path = public_path($path . $filename);
                Image::make($slider_tmp)->save($slider_path);
            }
        } else {
            $filename = $slider->slider_image;
        }
        $slider->slider_image = $filename;
        $slider->save();
        Session::flash('success_message', 'Slider has been Updated');
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        Session::flash('success_message', 'Slider has been deleted');
        return redirect()->back();
    }
}
