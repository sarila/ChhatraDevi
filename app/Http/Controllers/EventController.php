<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.events.index', compact('events'));
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
        return view('backend.events.create', compact('galleries', 'categories'));
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
            'feature_image' => 'required',
        ]);

        $data = $request->all();
        $event = new Event();
        $event->title = $data['title'];
        $event->location = $data['location'];
        $event->duration = $data['duration'];
        $event->no_of_seat = $data['no_of_seat'];
        $event->time_duration = $data['time_duration'];
        $event->excerpt = $data['excerpt'];
        $event->description = $data['description'];
        $event->gallery_id = $data['gallery_id'];
        $event->category_id = $data['category_id'];
        $event->status = $data['status'];
        $event->date =  Carbon::create($data['date']);
        $random = Str::random(10);
        if ($request->hasFile('feature_image')) {
            $image_tmp = $request->file('feature_image');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/event/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image_path = public_path($path . $filename);
                Image::make($image_tmp)->save($image_path);
                $event->feature_image = $filename;
            }
        }
       
        $event->save();
        Session::flash('info_message', 'Event has been Added');
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $galleries = Gallery::all();
        $categories = Category::all();
        return view('backend.events.edit', compact('event', 'galleries', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
         $this->validate($request, [
            'title' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'description' => 'required',
        ]);

        $data = $request->all();
        $event->title = $data['title'];
        $event->location = $data['location'];
        $event->duration = $data['duration'];
        $event->no_of_seat = $data['no_of_seat'];
        $event->time_duration = $data['time_duration'];
        $event->excerpt = $data['excerpt'];
        $event->description = $data['description'];
        $event->gallery_id = $data['gallery_id'];
        $event->category_id = $data['category_id'];
        $event->status = $data['status'];
        $event->date =  Carbon::create($data['date']);
        $random = Str::random(10);
        if ($request->hasFile('feature_image')) {
            $feature_image_tmp = $request->file('feature_image');
            if ($feature_image_tmp->isValid()) {
                $extension = $feature_image_tmp->getClientOriginalExtension();
                $filename = $random . '.' . $extension;
                $path = 'storage/event/';
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                 //code for remove old file
                if($event->feature_image != ''  && $event->feature_image != null){
                   $file_old = $path.$event->feature_image;
                   unlink($file_old);
                }
                $feature_image_path = public_path($path . $filename);
                Image::make($feature_image_tmp)->save($feature_image_path);
            }
        } else {
            $filename = $event->feature_image;
        }
        $event->feature_image = $filename;
        $event->save();
        Session::flash('info_message', 'Event has been updated successfully');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        Session::flash('info_message', 'Event Deleted');
        return redirect()->back();
    }
}
