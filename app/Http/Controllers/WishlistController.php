<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return view('frontend.wishlist.view');
    }

    public function add($product_id)
    {
        if(auth()->user()){
            $wishlist = new Wishlist();
            $wishlist->product_id = $product_id;
            $wishlist->user_id = Auth()->user()->id;
            $wishlist->save();
            return redirect()->back()->with('message', 'Wishlist saved successfully');
        }else{
            return redirect()->route('login');
        }
    }
}
