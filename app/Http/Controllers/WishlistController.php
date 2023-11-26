<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();

            return view('frontend.wishlist.view', compact('wishlists'));
        } else {
            return redirect()->back()->with('error', 'Wishlist is empty');
        }
    }

    public function addToWishList(Request $request)
    {
        if (auth()->user()) {
            if (Wishlist::where('user_id', Auth::id())->where('product_id', $request->product_id)->exists()) {
                return response()->json([
                    'status' => 'error',
                ]);
            } else {
                $wishlist = new Wishlist();
                $wishlist->product_id = $request->product_id;
                $wishlist->user_id = Auth()->user()->id;
                $wishlist->save();

                return response()->json([
                    'status' => 'success',
                ]);
            }
        } else {
            return response()->json([
                'status' => 'info',
            ]);
        }
    }

    public function wishlistDelete(Request $request)
    {
        $wishlist = Wishlist::find($request->wishlist_id);
        $wishlist->delete();

        return response()->json([
            'status' => 'success',
        ]);
    }

    public function wishlistCount(Request $request)
    {
        $wishListCount = Wishlist::where('user_id', auth()->user()->id)->count();

        return response()->json([
            'wishListCount' => $wishListCount,
        ]);
    }
}
