<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogCategoryStoreRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogCategoryIndex(){
        return view('admin.blog.category.index');
    }

    public function blogCategoryStore(BlogCategoryStoreRequest $request)
    {
        $blogCategory = new BlogCategory();
        $blogCategory->name = $request->name;
        $blogCategory->slug = Str::slug($blogCategory->slug).'-'. rand(1000,5000);
        $blogCategory->status = $request->status;
        $blogCategory->save();
        return redirect()->route('blog.category.manage')->with('message','Blog category create successfully');
    }

    public function blogCategoryManage()
    {
        $blogCategories = BlogCategory::orderBy('id','desc')->get();
        return view('admin.blog.category.manage',compact('blogCategories'));
    }

    public function blogCategoryView($id)
    {
        $blogCategory = BlogCategory::find($id);
        return view('admin.blog.category.view', compact('blogCategory'));
    }

    public function blogCategoryStatus($id)
    {
        $blogCategory = BlogCategory::find($id);
        if($blogCategory->status == 1){
            $blogCategory->status = 0;
        }else{
            $blogCategory->status = 1;
        }
        $blogCategory->save();
        return redirect()->back()->with('message', 'Category Status Update Success');
    }

    public function blogCategoryEdit($id)
    {
        $blogCategory = BlogCategory::find($id);
        return view('admin.blog.category.edit', compact('blogCategory'));
    }

    public function blogCategoryUpdate(Request $request,$id)
    {
        $blogCategory  = BlogCategory::find($id);
        $blogCategory->name = $request->name;
        $blogCategory->slug = Str::slug($request->slug).'-'. rand(1000,5000);
        if($blogCategory->status == 'on'){
            $blogCategory->status = 1;
        }else{
            $blogCategory->status = 0;
        }
        $blogCategory->update();
        return redirect()->route('blog.category.manage')->with('message','category updated successfully');
    }

    public function blogCategoryDelete($id)
    {
        $blogCategory = BlogCategory::find($id);
        // $blog = Blog::all();
        // if($blog->category_id == $blogCategory->id){
        //     return redirect()->back()->with('error','Can not delete this category, already a blog published under this category');
        // }
        $blogCategory->delete();
        return redirect()->back()->with('message', 'category deteted successfully');
    }

    public function index()
    {
        $blogCategories = BlogCategory::where('status',1)->get();
        return view('admin.blog.index',compact('blogCategories'));
    }

    public function store(BlogStoreRequest $request)
    {

        dd($request->all());
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($blog->title).'-'.rand(1000,5000);
        $blog->user_id = auth()->user()->id;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $blog->status = $request->status;
        // Image upload
        $image = $request->file('image');
        $image_name = $blog->slug . time().'.'.$image->getClientOriginalExtension();
        $image->move('admin/blog-image/', $image_name);
        $blog->image = $image_name;
        $blog->save();
        return redirect()->route('blog.manage')->with('message','Blog Create successfully');
    }

    public function manage()
    {
        $blogs = Blog::orderBy('id','desc')->get();
        return view('admin.blog.manage',compact('blogs'));
    }

}
