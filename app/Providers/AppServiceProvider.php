<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\Theme;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $oldcart = null;
    protected $cart= null;

    public function cart() {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');    
            $cart = new Cart($oldCart);
        }
    }
   
    public function register()
    {
        //View  Composer


        View::composer(['frontend.*'], function($view){
            $view->with('theme', Theme::first());
        });

        View::composer(['frontend.*'], function($view){
            $view->with('setting', Setting::first());
        });

        View::composer(['frontend.includes.*'], function($view){
            $view->with('services', Category::all());
        });       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
