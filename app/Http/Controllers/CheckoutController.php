<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $carts = Cart::where('user_id',Auth::id())->get();
        foreach($carts as $cart)
        {
            if(!Product::where('id',$cart->product_id)->where('qty','>=',$cart->product_qty)->exists())
            {
                $removeCart = Cart::where('user_id',Auth::id())->where('product_id',$cart->product_id)->first();
                $removeCart->delete();
            }
        }
        $updateCarts = Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout.index',compact('updateCarts'));
    }
}
