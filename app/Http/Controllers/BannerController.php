<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::first();

        return view('admin.banner.index', compact('banner'));
    }

    public function update(Request $request, $id = null)
    {
        $banner = Banner::find($id);
        if ($banner == null) {
            $banner = new Banner();
            $banner->title = $request->title;
            $banner->short_description = $request->short_description;
            // Image upload
            $image = $request->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('admin/banner-image/', $image_name);
            $banner->image = $image_name;
            $banner->save();

            return redirect()->back()->with('message', 'banner updated successfully');
        }
        $banner->title = $request->title;
        $banner->short_description = $request->short_description;
        // Image upload
        $image = $request->file('image');
        if ($image) {
            if (file_exists($banner->image)) {
                unlink($banner->image);
            }
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move('admin/banner-image/', $image_name);
            $banner->image = $image_name;
        }
        $banner->update();

        return redirect()->back()->with('message', 'banner updated successfully');
    }
}
