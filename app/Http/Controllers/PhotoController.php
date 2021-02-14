<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::all();
        return view('backend.photos.index', compact('photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $galleries = Gallery::latest()->get();
        return view('backend.photos.create', compact('galleries'));
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

                 $new_image = new Photo();
                $new_image->gallery_id = $data['gallery_id'];
                $new_image->images = $image_path;
                
                // $image_tmp = $image;
                // if ($image_tmp->isValid()) {
                //     $extension = $image_tmp->getClientOriginalExtension();
                //     $filename = $random . '.' . $extension;
                //     $path = 'storage/galleries/';
                //     if(!File::isDirectory($path)){
                //         File::makeDirectory($path, 0777, true, true);
                //     }
                //     $image_path = public_path($path . $filename);
                //     Image::make($image_tmp)->save($image_path);
                //     $new_image->image = $filename;
                // }
            }
           
        }

        $new_image->save();
        Session::flash('info_message', 'Images added to gallery');
        return redirect()->route('photos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
