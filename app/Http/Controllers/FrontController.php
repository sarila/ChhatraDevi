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
use DB;

class FrontController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get(['category_name', 'category_icon']);
        $ongoingProjects = Project::where('status', 0)->get();
        $upcomingEvents = Event::where('status', 1)->inRandomOrder(4)->get();
        $pastEvents = Event::where('status', 0)->inRandomOrder(2)->get();
        $teams = Team::inRandomOrder()->get();
        $testimonials = Testimonial::all();
        $news = News::latest()->get();
        $partners = DB::table('partners')->get(['icon']);
        $settings = Setting::all();
        $sliders = Slider::all();        

    	return view('frontend.index', compact('categories', 'ongoingProjects', 'upcomingEvents', 'pastEvents', 'teams', 'testimonials', 'news', 'partners', 'settings', 'sliders'));
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
