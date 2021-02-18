<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Theme;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //View  Composer


        View::composer(['frontend.*'], function($view){
            $view->with('theme', Theme::first());
        });

        View::composer(['frontend.*'], function($view){
            $view->with('setting', Setting::first());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
