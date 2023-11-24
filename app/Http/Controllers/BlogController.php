<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Http\Requests\BlogCategoryStoreRequest;
use App\Http\Requests\BlogUpdateRequest;
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

    public function blogCategoryStatus(Request $request)
    {
        $blogCategory = BlogCategory::find($request->category_id);
        if($blogCategory->status == 1){
            $blogCategory->status = 0;
        }else{
            $blogCategory->status = 1;
        }
        $blogCategory->save();
        return response()->json([
            'status'=> 'success',
        ]);
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
        if($request->status == 'on'){
            $blogCategory->status = 1;
        }else{
            $blogCategory->status = 0;
        }
        $blogCategory->update();
        return redirect()->route('blog.category.manage')->with('message','category updated successfully');
    }

    public function blogCategoryDelete(Request $request)
    {
        $blogCategory = BlogCategory::find($request->category_id);
        $blogs = Blog::all();
        foreach($blogs as $blog){
            if($blogCategory->id == $blog->blog_category_id){
                return response()->json([
                    'status' => 'error',
                ]);
            }
        }
        $blogCategory->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function index()
    {
        $blogCategories = BlogCategory::where('status',1)->get();
        return view('admin.blog.index',compact('blogCategories'));
    }

    public function store(BlogStoreRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = Str::slug($blog->title).'-'.rand(1000,5000);
        $blog->user_id = auth()->user()->id;
        $blog->blog_category_id = $request->blog_category_id;
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

    public function view($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.view', compact('blog'));
    }

    public function status(Request $request)
    {
        $blog = Blog::find($request->blog_id);
        if($blog->status == 1){
            $blog->status = 0;
        }else{
            $blog->status = 1;
        }
        $blog->save();
        return response()->json([
            'status' => 'success',
        ]);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $blogCategories = BlogCategory::where('status',1)->get();
        return view('admin.blog.edit',compact('blog','blogCategories'));
    }

    public function update(BlogUpdateRequest $request ,$id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($blog->title).'-'.rand(1000,5000);
        $blog->user_id = auth()->user()->id;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->description = $request->description;
        $blog->status = $request->status;
        // Image upload
        $image = $request->file('image');
        if($image){
            if(file_exists($blog->image))
            {
                unlink($blog->image);
            }
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('admin/blog-image/', $image_name);
            $blog->image = $image_name;
        }
        $blog->update();
        return redirect()->route('blog.manage')->with('message','Blog update successfully');
    }

    public function delete(Request $request)
    {
        $blog = Blog::find($request->blog_id);
        $blog->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }

}
