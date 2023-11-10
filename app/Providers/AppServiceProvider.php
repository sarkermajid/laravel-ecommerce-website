<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('*',function ($view){
            $view->with('categories',Category::where('status',1)->get());
         });
        View::composer('*',function ($view){
            $view->with('banner',Banner::first());
         });
        View::composer('*',function ($view){
            $view->with('Brands',Brand::where('status',1)->get());
         });
        View::composer('*',function ($view){
            $view->with('products',Product::where('status',1)->get());
         });
    }
}
