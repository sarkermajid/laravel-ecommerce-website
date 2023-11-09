<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('frontend.user.profile',compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('frontend.user.edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // Image upload
        $image = $request->file('image');
        $image_name = time().'.'.$image->getClientOriginalExtension();
        $image->move('frontend/user-image/', $image_name);
        $user->image = $image_name;
        $user->update();
        return redirect()->route('user.profile');
    }
}
