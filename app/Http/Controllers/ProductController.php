<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.index',compact('categories', 'brands'));
    }

    public function store(ProductStoreRequest $request)
    {
        return $request->all();
    }
}
