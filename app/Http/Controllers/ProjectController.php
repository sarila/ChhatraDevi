<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('backend.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallery::all();
        $categories = Category::all();
        return view('backend.projects.create', compact('galleries', 'categories'));
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
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'description' => 'required',
            'coverimage' => 'required',
        ]);

        $data = $request->all();
        $project = new Project();
        $project->title = $data['title'];
        $project->excerpt = $data['excerpt'];
        $project->description = $data['description'];
        $project->gallery_id = $data['gallery_id'];
        $project->status = $data['status'];
        $project->category_id = $data['category_id'];
        $project->start_date =  Carbon::create($data['start_date']);
        $random = Str::random(10);
        if ($request->hasFile('coverimage')) {
            $image_tmp = $request->file('coverimage');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/project/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image_tmp)->save($image_path);
                $project->coverimage = $filename;
            }
        }
       
        $project->save();
        Session::flash('info_message', 'Project has been Added');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('backend.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $galleries = Gallery::all();
        $categories = Category::all();
        return view('backend.projects.edit', compact('project', 'galleries', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
         $this->validate($request, [
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'description' => 'required',
            'coverimage' => 'required',
        ]);

        $data = $request->all();
        $project->title = $data['title'];
        $project->excerpt = $data['excerpt'];
        $project->description = $data['description'];
        $project->gallery_id = $data['gallery_id'];
        $project->status = $data['status'];
        $project->category_id = $data['category_id'];
        $project->start_date =  Carbon::create($data['start_date']);
        $random = Str::random(10);
        if ($request->hasFile('coverimage')) {
            $coverimage_tmp = $request->file('coverimage');
            if ($coverimage_tmp->isValid()) {
                $extension = $coverimage_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/project/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                 //code for remove old file
                if($project->coverimage != ''  && $project->coverimage != null){
                   $file_old = $path.$project->coverimage;
                   unlink($file_old);
                }
                $coverimage_path = public_path($path . $filename);
                Image::make($coverimage_tmp)->save($coverimage_path);
            }
        } else {
            $filename = $project->coverimage;
        }
        $project->coverimage = $filename;
        $project->save();
        Session::flash('info_message', 'Project has been Added');
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        Session::flash('info_message', 'Project Deleted');
        return redirect()->back();
    }
}
