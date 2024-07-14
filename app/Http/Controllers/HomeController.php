<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
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
        $latestCategories = Category::where('status', 1)->orderBy('id', 'desc')->limit(8)->get();
        $categories = Category::where('status', 1)->orderBy('id', 'desc')->get();
        $banner = Banner::first();
        $products = Product::where('status', 1)->limit(16)->get();
        $latestProductsDesc = Product::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
        $blogs = Blog::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
        $trendingProducts = Product::orderBy('trending', 'desc')->limit(3)->get();
        $brands = Brand::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.home.index', compact(
            'latestCategories',
            'categories',
            'banner',
            'products',
            'latestProductsDesc',
            'blogs',
            'trendingProducts',
            'brands'
        ));
    }

    public function productListAjax()
    {
        $products = Product::select('name')->where('status', 1)->get();
        $data = [];

        foreach ($products as $product) {
            $data[] = $product['name'];
        }

        return $data;
    }

    public function productSearch(Request $request)
    {
        if ($request->search_product != '') {
            $product = Product::where('name', 'LIKE', '%'.$request->search_product.'%')->first();
            if ($product) {
                $relatedProducts = Product::where('category_id', $product->category_id)->get();

                return view('frontend.shop.single-product-view', compact('product', 'relatedProducts'));
            } else {
                return redirect()->back()->with('message', 'No product found');
            }
        } else {
            return redirect()->back();
        }
    }
}
