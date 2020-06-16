<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Composers\MainComposer;
use App\Page;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //$pages = Page::all();
        $pages = Page::where('id', '>', 10)->get();
        View::share('pages', $pages);
        view()->composer('*', MainComposer::class);
        
    }
}
