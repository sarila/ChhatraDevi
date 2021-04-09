<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('admin_page', 'team');
        $teams = Team::all();
        return view('backend.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::put('admin_page', 'team');
        return view('backend.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'address' =>'required',
            'image' => 'required',
        ];
        $this->validate($request, $rules);
        $data = $request->all();
        $team = new Team();
        $team->name = $data['name'];
        $team->designation = $data['designation'];
        $team->department = $data['department'];
        $team->address = $data['address'];
        $team->email = $data['email'];
        $team->contact = $data['contact'];
        $random = Str::random(10);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/team/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image_tmp)->save($image_path);
                $team->image = $filename;
            }
        }
        $team->save();
        Session::flash('success_message', 'Team has been Added');
        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        Session::put('admin_page', 'team');
        return view('backend.teams.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        Session::put('admin_page', 'team');
        return view('backend.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->all();
        $validateData = $request->validate([
            'name' => 'required',
            'designation'=> 'required',
            'department'=> 'required',
            'address'=> 'required',
        ]); 
        $team->name = $data['name'];
        $team->designation = $data['designation'];
        $team->department = $data['department'];
        $team->address = $data['address'];
        $team->email = $data['email'];
        $team->contact = $data['contact'];
        $random = Str::random(10);
        if ($request->hasFile('image')) {
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/team/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                 //code for remove old file
                if($team->image != ''  && $team->image != null){
                   $file_old = $path.$team->image;
                   unlink($file_old);
                }
                $image_path = public_path($path . $filename);
                Image::make($image_tmp)->save($image_path);
            }
        } else {
            $filename = $team->image;
        }
        $team->image = $filename;
        $team->save();
        Session::flash('success_message', 'Team has been Updated Successfully');
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        Session::flash('success_message', 'Team has been deleted successfully');
        return redirect()->back();
    }

}
