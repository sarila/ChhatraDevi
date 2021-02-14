<?php

namespace App\Http\Controllers;

use App\Models\Image as img;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = img::all();
        return view('backend.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::latest()->get();
        return view('backend.images.create', compact('galleries'));
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
            'gallery_id' => 'required',
        ]);
        $data = $request->all();
        // $files = $request->file('images');
        if ($request->hasFile('images')) {

            foreach($request->images as $image) {
                $random = Str::random(10);
                $extension = $image->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/galleries/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image)->save($image_path);
                $image->move(public_path() . '/mytestfile/', $filename);
                $new_image = new img();
                $new_image->gallery_id = $data['gallery_id'];
                $new_image->image = $image_path;
            }
           
        }

        $new_image->save();
        Session::flash('info_message', 'Images added to gallery');
        return redirect()->route('images.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
