<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('admin.pages.privacy-policy',compact('privacyPolicy'));
    }

    public function store(Request $request, $id = null)
    {
        $privacyPolicy = PrivacyPolicy::find($id);
        if($privacyPolicy == null)
        {
            $privacyPolicy = new PrivacyPolicy();
            $privacyPolicy->privacy_policy = $request->privacy_policy;
            $privacyPolicy->save();
            return redirect()->back()->with('message','About Us Content updated successfully');
        }else{
            $privacyPolicy->privacy_policy = $request->privacy_policy;
            $privacyPolicy->update();
            return redirect()->back()->with('message','About Us Content updated successfully');
        }
    }

    public function view()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('frontend.pages.privacy-policy',compact('privacyPolicy'));
    }
}
