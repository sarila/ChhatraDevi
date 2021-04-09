<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('admin_page', 'partner');
        $partners = Partner::all();
        return view('backend.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('admin_page', 'partner');
        return view('backend.partners.create');
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
            'icon' => 'required',
        ]);

        $data = $request->all();
        $partner = new Partner();
        $partner->name = $data['name'];
        $partner->contact = $data['contact'];
        $partner->email = $data['email'];
        $partner->facebook = $data['facebook'];

        $random = Str::random(10);
        if ($request->hasFile('icon')) {
            $icon_tmp = $request->file('icon');
            if ($icon_tmp->isValid()) {
                $extension = $icon_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/partners/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $icon_path = public_path($path . $filename);
                Image::make($icon_tmp)->save($icon_path);
                $partner->icon = $filename;
            }
        }
        $partner->save();
        Session::flash('success_message', 'Partner has been Added');
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        Session::put('admin_page', 'partner');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        Session::put('admin_page', 'partner');
        return view('backend.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $this->validate($request, [
            'name'=> 'required',
        ]);

        $data = $request->all();
        $partner->name = $data['name'];
        $partner->contact = $data['contact'];
        $partner->email = $data['email'];
        $partner->facebook = $data['facebook'];

        $random = Str::random(10);
        if ($request->hasFile('icon')) {
            $icon_tmp = $request->file('icon');
            if ($icon_tmp->isValid()) {
                $extension = $icon_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/partners/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                //code for remove old file
                if($partner->icon != ''  && $partner->icon != null){
                   $file_old = $path.$partner->icon;
                   unlink($file_old);
                }
                $icon_path = public_path($path . $filename);
                Image::make($icon_tmp)->save($icon_path);
            }
        } else {
            $filename = $partner->icon;
        }
        $partner->icon = $filename;
        $partner->save();
        Session::flash('success_message', 'Partner has been Updated');
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        Session::flash('success_message', 'Partner Deleted');
        return redirect()->back();
    }
}
