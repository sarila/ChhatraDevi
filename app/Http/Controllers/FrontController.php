<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\News;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $ongoingProjects = Project::where('status', 0)->get();
        $upcomingEvents = Event::where('status', 1)->get();
        $teams = Team::all()->random(6);
        $testimonials = Testimonial::all();
        $news = News::latest()->get();
        $partners = Partner::all();
        $settings = Setting::all();
        $sliders = Slider::all();
        

    	return view('frontend.index', compact('categories', 'ongoingProjects', 'upcomingEvents', 'teams', 'testimonials', 'news', 'partners', 'settings', 'sliders'));
    }

    public function aboutUs()
    {
    	return view('frontend.about');
    }

    public function team()
    {
    	return view('frontend.about');
    }

    public function event()
    {
    	return view('frontend.about');
    }


    public function gallery()
    {
    	return view('frontend.about');
    }

    public function service()
    {
    	return view('frontend.about');
    }
}
