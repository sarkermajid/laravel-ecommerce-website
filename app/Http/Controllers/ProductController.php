<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();;
        return view('admin.product.index',compact('categories', 'brands'));
    }

    public function store(ProductStoreRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name).'-'.rand(1000,5000);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->short_description = $request->short_description;
        $product->description = strip_tags(html_entity_decode($request->description));
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->currency = $request->currency;
        $product->weight = $request->weight;
        $product->discount_amount = $request->discount_amount;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->status = $request->status;
        // Image upload
        $image = $request->file('image');
        $image_name = $product->slug . time().'.'.$image->getClientOriginalExtension();
        $image->move('admin/product-image/', $image_name);
        $product->image = $image_name;
        $product->save();
        return redirect()->route('product.manage')->with('message','Product created successfully');
    }

    public function manage()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('admin.product.manage',compact('products'));
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('admin.product.view', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::where('status',1)->get();
        $brands = Brand::where('status',1)->get();
        return view('admin.product.edit', compact('product','categories','brands'));
    }

    public function update(ProductUpdateRequest $request,$id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name).'-'.rand(1000,5000);
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->short_description = $request->short_description;
        $product->description = strip_tags(html_entity_decode($request->description));
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->currency = $request->currency;
        $product->weight = $request->weight;
        $product->discount_amount = $request->discount_amount;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->status = $request->status;
        // Image upload
        $image = $request->file('image');
        if($image){
            if(file_exists($product->image))
            {
                unlink($product->image);
            }
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('admin/product-image/', $image_name);
            $product->image = $image_name;
        }
        $product->update();
        return redirect()->route('product.manage')->with('message','Product Updated Successfully');
    }

    public function status(Request $request)
    {
        $product = Product::find($request->product_id);
        if($product->status == 1){
            $product->status = 0;
        }else{
            $product->status = 1;
        }
        $product->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function delete(Request $request)
    {
        $product = Product::find($request->product_id);
        $product->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }
}
