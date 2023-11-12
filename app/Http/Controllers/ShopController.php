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
        $brands = Brand::where('status',1)->orderBy('id','desc')->get();
        $products = Product::where('status',1)->orderBy('id','desc')->get();
        $offerProducts = Product::whereNotNull('discount_amount')->get();
        return view('frontend.shop.index',compact(
            'categories',
            'brands',
            'products',
            'offerProducts'
        ));
    }

    public function categoryProduct($id)
    {
        $categories = Category::where('status',1)->orderBy('id','desc')->get();
        $brands = Brand::where('status',1)->get();
        $products = Product::where('category_id',$id)
                                ->where('status',1)
                                ->get();

        return view('frontend.shop.category-wise-product',compact(
            'categories',
            'products',
            'brands'
        ));
    }

    public function brandProduct($id)
    {
        $categories = Category::where('status',1)->orderBy('id','desc')->get();
        $brands = Brand::where('status',1)->get();
        $products = Product::where('brand_id',$id)
                                ->where('status',1)
                                ->get();

        return view('frontend.shop.brand-wise-product',compact(
            'categories',
            'products',
            'brands'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $product->trending = $product->trending + 1;
        $product->save();
        $relatedProducts = Product::where('category_id',$product->category_id)->get();
        return view('frontend.shop.single-product-view',compact('product','relatedProducts'));
    }
}
