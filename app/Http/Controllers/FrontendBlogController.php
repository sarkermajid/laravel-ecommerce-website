<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;

class FrontendBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 1)->paginate(4);
        $blogCategories = BlogCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $recentNews = Blog::orderBy('id', 'desc')->get();

        return view('frontend.blog.index', compact('blogs', 'blogCategories', 'recentNews'));
    }

    public function singleBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blogCategories = BlogCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $recentNews = Blog::orderBy('id', 'desc')->get();

        return view('frontend.blog.details', compact('blog', 'blogCategories', 'recentNews'));
    }

    public function categoryBlog($slug)
    {
        $blogCategory = BlogCategory::where('slug', $slug)->first();
        $categoryWiseBlogs = Blog::where('blog_category_id', $blogCategory->id)->paginate(4);
        $recentNews = Blog::orderBy('id', 'desc')->get();
        $blogCategories = BlogCategory::where('status', 1)->orderBy('id', 'desc')->get();

        return view('frontend.blog.category-wise-blog', compact('categoryWiseBlogs', 'recentNews', 'blogCategories'));
    }
}
