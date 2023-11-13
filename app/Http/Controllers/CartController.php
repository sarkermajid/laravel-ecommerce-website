<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;
        if(Auth::check()){
            $product = Product::where('id',$product_id)->first();
            if($product){
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                    return response()->json([
                        'status' => 'error',
                    ]);
                }else{
                    $cart = new Cart();
                    $cart->user_id = Auth::id();
                    $cart->product_id = $product_id;
                    $cart->product_qty = $product_qty;
                    $cart->save();
                    return response()->json([
                        'status' => 'success',
                    ]);
                }
            }
        }else{
            return response()->json([
                'status' => 'error',
            ]);
        }
    }

    public function directAddtoCart(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;
        if(Auth::check()){
            $product = Product::where('id',$product_id)->first();
            if($product){
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                    return response()->json([
                        'status' => 'error',
                    ]);
                }else{
                    $cart = new Cart();
                    $cart->user_id = Auth::id();
                    $cart->product_id = $product_id;
                    $cart->product_qty = $product_qty;
                    $cart->save();
                    return response()->json([
                        'status' => 'success',
                    ]);
                }
            }
        }else{
            return response()->json([
                'status' => 'error',
            ]);
        }
    }

    public function cartView()
    {
        $carts = Cart::where('user_id',Auth::id())->get();
        return view('frontend.cart.view',compact('carts'));
    }

    public function cartUpdateInc(Request $request)
    {
        $cart = Cart::where('product_id',$request->product_id)->where('user_id',Auth::id())->first();
        if($cart->product_qty < 10 ){
            $cart->product_qty = $cart->product_qty + 1;
            $cart->update();

            return response()->json([
                'status' => 'success',
            ]);
        }else{
            return response()->json([
                'status' => 'error',
            ]);
        }


    }

    public function cartUpdateDec(Request $request)
    {
        $cart = Cart::where('product_id',$request->product_id)->where('user_id',Auth::id())->first();
        if($cart->product_qty > 1){
            $cart->product_qty = $cart->product_qty - 1;
            $cart->update();

            return response()->json([
                'status' => 'success',
            ]);
        }else{
            return response()->json([
                'status' => 'error',
            ]);
        }

    }

    public function cartDelete(Request $request)
    {
        $cart = Cart::find($request->cart_id);
        $cart->delete();
        return response()->json([
            'status' => 'success',
        ]);
    }
}
