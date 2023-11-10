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
        return view('frontend.shop.index');
    }

    public function categoryProduct($id)
    {
        $brands = Brand::where('status',1)->get();
        $products = Product::where('category_id',$id)
                                ->where('status',1)
                                ->get();

        return view('frontend.shop.category-wise-product',compact('products','brands'));
    }

    public function brandProduct($id)
    {
        $brands = Brand::where('status',1)->get();
        $products = Product::where('brand_id',$id)
                                ->where('status',1)
                                ->get();

        return view('frontend.shop.brand-wise-product',compact('products','brands'));
    }
}
