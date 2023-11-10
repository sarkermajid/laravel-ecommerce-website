<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $categories = Category::where('status',1)->orderBy('id','desc')->get();
        $brands = Brand::where('status',1)->orderBy('id', 'desc')->get();
        return view('frontend.shop.index',compact('categories','brands'));
    }

    public function categoryProduct($id)
    {
        $categories = Category::where('status',1)->orderBy('id','desc')->get();
        $brands = Brand::where('status',1)->orderBy('id', 'desc')->get();
        $products = Product::where('category_id',$id)
                                ->where('status',1)
                                ->orderBy('id','desc')
                                ->get();

        return view('frontend.shop.category-wise-product',compact('products','categories','brands'));
    }

    public function brandProduct($id)
    {
        $categories = Category::where('status',1)->orderBy('id','desc')->get();
        $brands = Brand::where('status',1)->orderBy('id', 'desc')->get();
        $products = Product::where('category_id',$id)
                                ->where('status',1)
                                ->orderBy('id','desc')
                                ->get();

        return view('frontend.shop.brand-wise-product',compact('products','categories','brands'));
    }
}
