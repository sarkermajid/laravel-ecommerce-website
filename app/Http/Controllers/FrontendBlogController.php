<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.index');
    }
}
