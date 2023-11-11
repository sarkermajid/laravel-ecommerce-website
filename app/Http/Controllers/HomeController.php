<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $latestCategories = Category::where('status',1)->orderBy('id','desc')->limit(8)->get();
        $categories = Category::where('status',1)->orderBy('id','desc')->get();
        $banner = Banner::first();
        $products = Product::where('status',1)->get();
        $latestProductsDesc = Product::where('status',1)->orderBy('id','desc')->limit(3)->get();
        $latestProductsAsc = Product::where('status',1)->orderBy('id','asc')->limit(3)->get();
        return view('frontend.home.index',compact(
            'latestCategories',
            'categories',
            'banner',
            'products',
            'latestProductsDesc',
            'latestProductsAsc'
        ));
    }
}
