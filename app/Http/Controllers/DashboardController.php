<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategory = Category::count();
        $totalUser = User::count();
        $totalBrand = Brand::count();
        return view('admin.home.index',compact('totalCategory', 'totalUser','totalBrand'));
    }
}
