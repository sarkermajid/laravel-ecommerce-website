<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function store(CategoryStoreRequest $request)
    {
        $category  = new Category();
        $category->name = $request->name;
        $category->slug  = $request->slug;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
         // Image upload
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move('admin/category-image/', $image_name);
        $category->image = $image_name;
        $category->save();
        return redirect()->back()->with('message','Category added successfully!');
    }

    public function manage()
    {
        return view('admin.category.manage',
        [
            'categories'=>Category::orderBy('id','desc')->get()
        ]);
    }

    public function view($id)
    {
        $category = Category::find($id);
        return view('admin.category.view', compact('category'));
    }
}
