@extends('frontend.master')

@section('title')
    My Cart
@endsection

@section('body')
        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table class="">
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; @endphp
                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ asset('admin/product-image/'.$cart->product->image) }}" alt="" width="80">
                                            <h5>{{ $cart->product->name }}</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                           {{ $cart->product->discount_amount ? $cart->product->discount_amount  : $cart->product->price }} {{ generalSettings('currency') }}
                                        </td>
                                        @if($cart->product->qty >= $cart->product_qty)
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <span class="dec qtybtn" data-id="{{ $cart->product_id }}">-</span>
                                                    <input type="text" value="{{ $cart->product_qty }}">
                                                    <span class="inc qtybtn" data-id="{{ $cart->product_id }}">+</span>
                                                </div>
                                            </div>
                                        </td>
                                        @else
                                            <td><span class="text-danger">Out Of Stock</span></td>
                                        @endif
                                        <td class="shoping__cart__total">
                                            {{ $cart->product->discount_amount ? $cart->product->discount_amount * $cart->product_qty : $cart->product->price * $cart->product_qty }} {{ generalSettings('currency') }}
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close remove_cart" data-id="{{ $cart->id }}"></span>
                                        </td>
                                    </tr>
                                    @php $total += $cart->product->discount_amount ? $cart->product->discount_amount * $cart->product_qty : $cart->product->price * $cart->product_qty @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="{{ route('shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Total <span>{{ $total }} {{ generalSettings('currency') }}</span></li>
                            </ul>
                            <a href="{{ route('checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shoping Cart Section End -->
@endsection


