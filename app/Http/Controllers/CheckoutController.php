<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\PromoCode;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $carts = Cart::where('user_id',Auth::id())->get();
        $cartTotalBalance = 0;
        foreach($carts as $cart)
        {
            if(!Product::where('id',$cart->product_id)->where('qty','>=',$cart->product_qty)->exists())
            {
                $removeCart = Cart::where('user_id',Auth::id())->where('product_id',$cart->product_id)->first();
                $removeCart->delete();
            }
        }
        $carts = Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout.index',compact('carts','cartTotalBalance'));
    }

    public function placeOrder(Request $request)
    {
        $carts = Cart::where('user_id',auth()->user()->id)->get();

        if($carts->count() >= 1){

            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->name = $request->name;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->city = $request->city;
            $order->zip_code = $request->zip_code;
            $order->total_price = $request->total_price;
            $order->tracking_number = rand(100000,500000);
            $order->save();

            foreach($carts as $cart){
                // create orderitem table
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cart->product_id;
                $orderItem->product_qty = $cart->product_qty;
                $orderItem->price = $cart->product->discount_amount ? $cart->product->discount_amount : $cart->product->price;
                $orderItem->save();

                // product quantity decrement after oder place
                $product = Product::where('id', $orderItem->product_id)->first();
                $product->qty = $product->qty - $orderItem->product_qty;
                $product->update();
            }

            // user data update for easily order next time
            if(auth()->user()->address == null ||  auth()->user()->city == null || auth()->user()->zip_close == null){
                $user = User::where('id',auth()->user()->id)->first();
                $user->address = $request->address;
                $user->city = $request->city;
                $user->zip_code = $request->zip_code;
                $user->save();
            }
            // after order carts will be removed
            $carts = Cart::where('user_id',auth()->user()->id)->get();
            Cart::destroy($carts);
        return redirect()->back()->with('message','Order Place successfully');
        }else{
            return redirect()->back()->with('error','Your cart is empty');
        }

    }

    public function applyPromoCode(Request $request)
    {
        $carts = Cart::where('user_id',Auth::id())->get();
        if($carts->count() > 0){
            foreach($carts as $cart)
            {
                $cartTotalBalance = 0;
                $cartTotalBalance +=  $cart->product->discount_amount ? $cart->product->discount_amount * $cart->product_qty : $cart->product->price * $cart->product_qty;
            }
            $promoCode = PromoCode::where('code',$request->promo_code)->first();
            if($promoCode){
                if($promoCode->user_id == auth()->user()->id){
                    return redirect()->back()->with('error','You are already used promo code');
                }else{
                    $currentDate = Carbon::now();
                    $expiryDate = Carbon::createFromFormat('m/d/Y', $promoCode->expire_date);
                    if ($currentDate < $expiryDate) {
                        if ($promoCode->limit > 0) {
                            if($promoCode->type == 1){
                                $cartTotalBalance -= ($promoCode->discount / 100) * $cartTotalBalance;
                            }else{
                                $cartTotalBalance -= $promoCode->discount;
                            }
                            $promoCode->used = $promoCode->used + 1;
                            $promoCode->limit = $promoCode->limit - 1;
                            $promoCode->user_id = auth()->user()->id;
                            $promoCode->save();
                            return view('frontend.checkout.index',compact('cartTotalBalance','carts'))->with('message','Promo Code applied successfully');
                        } else {
                            $promoCode->status = 0;
                            $promoCode->save();
                            return redirect()->back()->with('error','Promo code limit is out of range');
                        }
                    } else {
                        $promoCode->status = 0;
                        $promoCode->save();
                        return response()->json([
                            'status' => 'expired_error',
                        ]);
                    }
                }

            }else{
                return redirect()->back()->with('error','Promo code not found');
            }
        }else{
            return redirect()->route('home');
        }
    }
}
