<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalUsers = User::count();
        $totalBrands = Brand::count();
        $totalBlogs = Blog::count();
        return view('admin.home.index',compact('totalCategories', 'totalUsers','totalBrands','totalBlogs'));
    }
}
