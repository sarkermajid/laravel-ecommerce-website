<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('admin.pages.about-us',compact('aboutUs'));
    }

    public function store(Request $request, $id = null)
    {
        $aboutUs = AboutUs::find($id);
        if($aboutUs == null)
        {
            $aboutUs = new AboutUs();
            $aboutUs->about_us = $request->about_us;
            $aboutUs->save();
            return redirect()->back()->with('message','About Us Content updated successfully');
        }else{
            $aboutUs->about_us = $request->about_us;
            $aboutUs->update();
            return redirect()->back()->with('message','About Us Content updated successfully');
        }
    }

    public function view()
    {
        $aboutUs = AboutUs::first();
        return view('frontend.pages.about-us',compact('aboutUs'));
    }
}
