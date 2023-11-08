<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogCategoryStoreRequest;
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
        $blogCategory->description = strip_tags(html_entity_decode($request->description));
        if($blogCategory->status == 'on'){
            $blogCategory->status = 1;
        }else{
            $blogCategory->status = 0;
        }
        $blogCategory->update();
        return redirect()->route('category.manage')->with('message','category updated successfully');
    }

    public function blogCategoryDelete($id)
    {
        $blogCategory = BlogCategory::find($id);
        $blogCategory->delete();
        return redirect()->back()->with('message', 'category deteted successfully');
    }


}
