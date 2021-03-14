<?php

namespace App\Http\Controllers;

use App\Models\Pcategory;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcategories = Pcategory::all();
        $tags = Tag::all();
        return view('backend.products.create', compact('pcategories', 'tags'));
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
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required',
        ]);
        $data = $request->all();
        $product = new Product();
        $product->product_name = $data['product_name'];
        $product->product_description = $data['product_description'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->discount = $data['discount'];
        $product->discount_type = $data['discount_type'];
        $product->pcategory_id = $data['pcategory_id'];
        $product->SKU = Str::random(8);
        $random = Str::random(10);
        if ($request->hasFile('coverimage')) {
            $image_tmp = $request->file('coverimage');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/product/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image_tmp)->save($image_path);
                $product->coverimage = $filename;
            }
        }

        $product->save();

        if ($request->hasFile('images')) {
            foreach($request->images as $image) {
                $random = Str::random(10);
                $extension = $image->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/products/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image)->save($image_path);
                $product->pimages()->create([
                    'name' => $filename,
                ]);
            } 
        }

        if ($request->tags) {
            foreach ($request->tags as $tag) {
                $product->tags()->create([
                    'tag_name' => $tag,
                ]);
            }
        }

        Session::flash('info_message', 'Product has been updated');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.products.show', compact('product'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $pcategories = Pcategory::all();
        $tags = Tag::all();
        return view('backend.products.edit', compact('product', 'pcategories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required',
        ]);
        $data = $request->all();
        $product->product_name = $data['product_name'];
        $product->product_description = $data['product_description'];
        $product->price = $data['price'];
        $product->quantity = $data['quantity'];
        $product->discount = $data['discount'];
        $product->discount_type = $data['discount_type'];
        $product->pcategory_id = $data['pcategory_id'];
        $product->SKU = Str::random(8);
        $random = Str::random(10);
        if ($request->hasFile('coverimage')) {
            $image_tmp = $request->file('coverimage');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/product/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                //code for remove old file
                if($product->coverimage != ''  && $product->coverimage != null){
                   $file_old = $path.$product->coverimage;
                   unlink($file_old);
                }
                $tmp_image = public_path($path . $tmp_image);
                Image::make($image_tmp)->save($tmp_image);
            }
        } else {
            $filename = $product->coverimage;
        }
        $product->coverimage = $filename;

        $product->save();

        if ($request->hasFile('images')) {
            foreach($request->images as $image) {
                $random = Str::random(10);
                $extension = $image->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/products/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image)->save($image_path);
                $product->pimages()->create([
                    'name' => $filename,
                ]);
            } 
        }

        if ($request->tags) {
            foreach ($request->tags as $tag) {
                $product->tags()->create([
                    'tag_name' => $tag,
                ]);
            }
        }

        Session::flash('info_message', 'Product has been saved');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('info_message', 'Product Deleted');
        return redirect()->route('products.index');
    }

    // protected function validateData(Request $request)
    // {
    //     return request()->validate($request, [
    //         'product_name' => 'required',
    //         'product_description' => 'required',
    //         'price' => 'required',
    //     ]);
    // }
}
