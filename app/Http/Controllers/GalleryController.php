<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\Image as img;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('backend.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.galleries.create', compact('categories'));
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
            'name'=> 'required',
        ]);
        $data = $request->all();
        $gallery = new Gallery();
        $gallery->name = $data['name'];
        $gallery->slug = Str::slug($data['name']);;
        $gallery->category_id = $data['category_id'];
        $gallery->save();
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
                $gallery->images()->create([
                    'image' => $filename,
                ]);
            } 
        }
        $gallery->save();
        Session::flash('success_message', 'Gallery Added');
        return redirect()->route('galleries.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        $images = $gallery->images()->get();
        return view('backend.galleries.show', compact('gallery', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate($request, [
            'name'=> 'required',
        ]);
        $data = $request->all();
        $gallery->name = $data['name'];
        $gallery->slug = Str::slug($data['name']);;
        $gallery->category_id = $data['category_id'];
        $gallery->save();
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
                $gallery->images()->create([
                    'image' => $image_path,
                ]);
            } 
        }
        $gallery->save();
        Session::flash('success_message', 'Gallery Added');
        return redirect()->route('galleries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        Session::flash('success_message', 'Gallery has been deleted');
        return redirect()->back();

    }
}
