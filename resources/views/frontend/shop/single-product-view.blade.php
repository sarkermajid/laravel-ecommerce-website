@extends('frontend.master')

@section('body')
        <!-- Product Details Section Begin -->
        <section class="product-details spad">
            <div class="container">
                <div class="row product_data">
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__item">
                                <img class="product__details__pic__item--large"
                                    src="{{ asset('admin/product-image/'.$product->image) }}" alt="">
                            </div>
                            {{-- <div class="product__details__pic__slider owl-carousel">
                                <img data-imgbigurl="{{ asset('admin/product-image/'.$product->image) }}"
                                    src="{{ asset('admin/product-image/'.$product->image) }}" alt="">
                                <img data-imgbigurl="{{ asset('admin/product-image/'.$product->image) }}"
                                    src="{{ asset('admin/product-image/'.$product->image) }}" alt="">
                                <img data-imgbigurl="{{ asset('admin/product-image/'.$product->image) }}"
                                    src="{{ asset('admin/product-image/'.$product->image) }}" alt="">
                                <img data-imgbigurl="{{ asset('admin/product-image/'.$product->image) }}"
                                    src="{{ asset('admin/product-image/'.$product->image) }}" alt="">
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product__details__text">
                            <h3>{{ $product->name }}</h3>
                            <div class="product__details__rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                                <span>(18 reviews)</span>
                            </div>
                            <div class="product__details__price">{{ $product->price }} BDT</div>
                            <p>{{ $product->short_description }}</p>
                            @if($product->qty > 0 )
                            <input type="hidden" class="product_id" value="{{ $product->id }}">
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty ">
                                        <span class="dec qtybtn">-</span>
                                        <input type="text" class="qty_input" value="1">
                                        <span class="inc qtybtn">+</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="primary-btn addToCart">ADD TO CARD</a>
                            <a href="#" data-id="{{ $product->id }}" class="heart-icon addToWishlist"><span class="icon_heart_alt"></span></a>
                            @endif
                            <ul>
                                <li><b>Availability</b> <span>{{ $product->qty > 0 ? 'In Stock' : 'Out of Stock' }}</span></li>
                                @if($product->weight)
                                <li><b>Weight</b> <span>{{ $product->weight }}</span></li>
                                @endif
                                <li><b>Share on</b>
                                    <div class="share">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                        aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                        aria-selected="false">Reviews <span>(1)</span></a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Product Description</h6>
                                        <p>{!! $product->description !!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Product Review</h6>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Section End -->

        <!-- Related Product Section Begin -->
        <section class="related-product">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title related__product__title">
                            <h2>Related Product</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedProducts as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('admin/product-image/'.$product->image) }}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="{{ route('product.single.view', ['id'=>$product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{ $product->name }}</a></h6>
                                <h5>{{ $product->price }} BDT</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Related Product Section End -->
@endsection
