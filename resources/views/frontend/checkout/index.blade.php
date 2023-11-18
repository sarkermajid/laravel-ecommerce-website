@extends('frontend.master')

@section('title')
    Checkout
@endsection

@section('body')
        <!-- Checkout Section Begin -->
        <section class="checkout spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h6><span class="icon_tag_alt"></span> Have a Promo Code? <a href="{{ route('cart') }}">Click here</a> to enter your code
                        </h6>
                    </div>
                </div>
                <div class="checkout__form">
                    <h4>Billing Details</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="checkout__input">
                                            <p>Name<span>*</span></p>
                                            <input type="text" name="name" value="{{ auth()->user()->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="checkout__input">
                                            <p>Phone<span>*</span></p>
                                            <input type="number" name="phone" value="{{ auth()->user()->phone ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <p>Address<span>*</span></p>
                                    <input type="text" name="address" value="{{ auth()->user()->address ?? '' }}" class="checkout__input__add">
                                </div>
                                <div class="checkout__input">
                                    <p>City/Town<span>*</span></p>
                                    <input type="text" name="city" value="{{ auth()->user()->city ?? '' }}">
                                </div>
                                <div class="checkout__input">
                                    <p>Postcode / ZIP<span>*</span></p>
                                    <input type="number" name="zip_code" value="{{ auth()->user()->zip_code ?? '' }}">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="checkout__order">
                                    <h4>Your Order</h4>
                                    <div class="checkout__order__products">Products  <span>Total</span></div>
                                    <ul>
                                        @php $total = 0; @endphp
                                        @foreach ($updateCarts as $cart)
                                        <li>{{ Str::substr($cart->product->name, 0, 20) }}<span>{{ $cart->product->discount_amount ? $cart->product->discount_amount * $cart->product_qty : $cart->product->price * $cart->product_qty }} {{ $cart->product->currency }}</span></li>
                                        @php $total += $cart->product->discount_amount ? $cart->product->discount_amount * $cart->product_qty : $cart->product->price * $cart->product_qty @endphp
                                        @endforeach
                                    </ul>
                                    <hr>
                                    <div class="checkout__order__total">Total <span>{{ $total }} {{ $cart->product->currency }}</span></div>
                                    <div class="checkout__input__checkbox">
                                        <label for="payment">
                                            Cash On Delivery
                                            <input type="checkbox" id="payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="paypal">
                                            Bkash
                                            <input type="checkbox" id="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="paypal">
                                            Nagad
                                            <input type="checkbox" id="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="site-btn">PLACE ORDER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->
@endsection
