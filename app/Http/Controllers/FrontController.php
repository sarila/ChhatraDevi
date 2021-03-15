<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Project;
use App\Models\Image as img;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class FrontController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get(['category_name', 'category_icon']);
        $ongoingProjects = DB::table('projects')->where('status', 0)->get();
        $upcomingEvents = DB::table('events')->where('status', 1)->inRandomOrder(4)->limit(4)->get();
        $pastEvents = DB::table('events')->where('status', 0)->inRandomOrder()->limit(2)->get();
        $teams = DB::table('teams')->inRandomOrder()->limit(6)->get();
        $testimonials = DB::table('testimonials')->get();
        $news = News::latest()->limit(3)->get();
        $partners = DB::table('partners')->get(['icon']);
        $settings = Setting::first()->get();
        $sliders = Slider::all();     

    	return view('frontend.index', compact('categories', 'ongoingProjects', 'upcomingEvents', 'pastEvents', 'teams', 'testimonials', 'news', 'partners', 'settings', 'sliders'));
    }

    public function aboutUs()
    {
        $categories = DB::table('categories')->get(['category_name', 'category_icon']);
        $projects = DB::table('projects')->inRandomOrder()->limit(3)->get();
        $partners = DB::table('partners')->get(['icon']);
        $teams = DB::table('teams')->inRandomOrder()->limit(6)->get();
        $setting = Setting::first()->get();
    	return view('frontend.about', compact('categories', 'projects', 'teams', 'setting', 'partners'));
    }

    public function teams()
    {
        $teams = DB::table('teams')->get();
        $departments = DB::table('teams')->select('department', DB::raw('count(*) as total'))
        ->groupBy('department')
        ->get();
    	return view('frontend.team', compact('teams', 'departments'));
    }

    public function events()
    {
        $upcomingEvents = DB::table('events')->where('status', 1)->inRandomOrder(4)->limit(4)->get();
        $pastEvents = DB::table('events')->where('status', 0)->inRandomOrder()->limit(2)->get();
    	return view('frontend.event', compact('upcomingEvents', 'pastEvents'));
    }


    public function gallery()
    {
        $galleries = Gallery::all();
    	return view('frontend.gallery', compact('galleries'));
    }

    public function services()
    {
        $categories = DB::table('categories')->get(['category_name', 'category_icon', 'id', 'slug']);
        return view('frontend.all-services', compact('categories'));
    }

    public function serviceDetail($service)
    {

        $serviceDetail = DB::table('categories')->where('slug', $service)->first();
        $relatedServices = DB::table('categories')->latest()->limit(3)->get();
        $projects = DB::table('projects')->where('category_id', $serviceDetail->id)->get();
        $galleries = DB::table('galleries')->where('category_id', $serviceDetail->id)->get();
        $images[] = null;
        foreach ($galleries as $gallery) {
            $images[] = (DB::table('images')->where('gallery_id', $gallery->id)->get());
        }
        $allImages = Arr::collapse($images);
        return view('frontend.service-detail', compact('serviceDetail', 'relatedServices', 'projects', 'allImages'));
    }

    public function ongoingProjects()
    {
        $ongoingProjects = DB::table('projects')->where('status', 0)->get();
        return view('frontend.projects.ongoing-project', compact('ongoingProjects'));
    }

    public function completedProjects()
    {
        $completedProjects = DB::table('projects')->where('status', 1)->get();
        return view('frontend.projects.completed-project', compact('completedProjects'));
    }

    public function projectDetail($project)
    {
        $projectDetails = DB::table('projects')->where('id', $project)->first();
        $galleries = img::where('gallery_id', $projectDetails->gallery_id)->get();
        
        return view('frontend.projects.project-detail', compact('projectDetails', 'galleries'));
    }

    public function articleNews()
    {
        $articleNews = News::where('news_type', 0)->get();
        return view('frontend.news.article-news', compact('articleNews'));

    }

    public function mediaNews()
    {
        $mediaNews = News::where('news_type', 1)->get();
        return view('frontend.news.media-coverage', compact('mediaNews'));
    }

    public function articleDetail($article)
    {
        $articleDetail = News::where('id', $article)->first();
        return view('frontend.news.article-detail', compact('articleDetail'));
    }

    public function mediaDetail($media)
    {
        $mediaDetail =  News::where('news_type', 1)->first();
        return view('frontend.news.media-detail', compact('mediaDetail'));
    }

    public function shop()
    {
        $pcategories = DB::table('pcategories')->get(['name', 'slug']);
        $products = DB::table('products')->get(['coverimage', 'product_name', 'id', 'price']);
        $topproducts = DB::table('products')->latest()->limit(3)->get(['coverimage', 'product_name', 'id', 'price']);

        return view('frontend.shop.shop-index', compact('pcategories', 'products', 'topproducts'));
    }

    public function productDetail($product)
    {
        $productDetail = Product::where('id', $product)->first();
        $image[] = $productDetail->coverimage;
        foreach ($productDetail->pimages()->with('pimages')->pluck('name') as $relatedimg) {
            $image[] = $relatedimg;
        }

        return view('frontend.shop.product-detail', compact('productDetail', 'image'));
    }

}
