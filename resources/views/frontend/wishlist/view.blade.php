@extends('frontend.master')

@section('title')
    Wishlist
@endsection
@section('body')
    <!-- wishlist Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Wishlist</th>
                                    <th>Price</th>
                                    <th>Cart</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlists as $wishlist)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('admin/product-image/'.$wishlist->product->image) }}" alt="" width="80">
                                        <h5>{{ $wishlist->product->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $wishlist->product->price }} {{ $wishlist->product->currency }}
                                    </td>
                                    <td class="shoping__cart__total">
                                        <a href="#" data-id="{{ $wishlist->product->id }}" class="cart-btn directAddToCart"><span class=""></span>
                                            Add to Cart</a>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span data-id="{{ $wishlist->id }}" class="icon_close wishlist-delete"></span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="shoping__cart__btns">
                        <a href="{{ route('shop') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wishlist Section End -->
@endsection
