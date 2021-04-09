<?php

namespace App\Http\Controllers;

use App\Models\Pcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('admin_page', 'pcategory');
        $categories = Pcategory::all();
        return view('backend.shop.product-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('admin_page', 'pcategory');
        return view('backend.shop.product-categories.create');
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
            'name'=> 'required'
        ]);

        $data = $request->all();
        $pcategory = new Pcategory();
        $pcategory->name = $data['name'];
        $pcategory->slug = Str::slug($data['name']);
        $pcategory->save();
        Session::flash('success_message', 'Product Category has been Added');
        return redirect()->route('pcategories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pcategory  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Pcategory $pcategory)
    {
        Session::put('admin_page', 'pcategory');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pcategory  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Pcategory $pcategory)
    {
        Session::put('admin_page', 'pcategory');
        return view('backend.shop.product-categories.edit', compact('pcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pcategory  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pcategory $pcategory)
    {
        $this->validate($request, [
            'name'=> 'required'
        ]);
    
        $data = $request->all();
        $pcategory->name = $data['name'];
        $pcategory->slug = Str::slug($data['name']);
        $pcategory->save();
        Session::flash('success_message', 'Product Category has been Updated');
        return redirect()->route('pcategories.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pcategory  $pcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pcategory $pcategory)
    {
        $pcategory->delete();
        Session::flash('success_message', 'Product Category deleted succesfully');
        return redirect()->route('pcategories.index');
    }
}
