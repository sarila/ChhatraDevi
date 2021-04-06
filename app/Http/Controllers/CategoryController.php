<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
            'category_name'=>'required',
            'category_icon'=>'required',
        ]);
       
        $data=$request->all();
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->description = $data['description'];
        $category->slug = Str::slug($data['category_name']);
        $category->category_icon = $data['category_icon'];

        $random = Str::random(10);
        if ($request->hasFile('category_icon')) {
            $icon_tmp = $request->file('category_icon');
            if ($icon_tmp->isValid()) {
                $extension = $icon_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/category/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $icon_path = public_path($path . $filename);
                Image::make($icon_tmp)->save($icon_path);
                $category->category_icon = $filename;
            }
        }
        $category->save();
        Session::flash('success_message', 'Category has been Added');
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'category_name'=>'required',
        ]);
        $data=$request->all();
        $category->category_name = $data['category_name'];
        $category->description = $data['description'];
        $category->slug = Str::slug($data['category_name']);

        $random = Str::random(10);
        if ($request->hasFile('category_icon')) {
            $icon_tmp = $request->file('category_icon');
            if ($icon_tmp->isValid()) {
                $extension = $icon_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/category/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                //code for remove old file
                if($category->category_icon != ''  && $category->category_icon != null){
                   $file_old = $path.$category->category_icon;
                   unlink($file_old);
                }
                $icon_path = public_path($path . $filename);
                Image::make($icon_tmp)->save($icon_path);
            }
        } else {
            $filename = $category->category_icon;
        }
        $category->category_icon = $filename;
        $category->save();
        Session::flash('success_message', 'Category has been updated');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        Session::flash('success_message', 'Category Deleted');
        return redirect()->back();
    }
}
