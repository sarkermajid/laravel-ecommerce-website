@push('styles')

@endpush



@extends('frontend.master')

@section('title')
    Shop
@endsection

@section('body')
        <!-- Product Section Begin -->
        <section class="product spad">
            <div class="container">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>All Categories</h4>
                                @foreach ($categories as $category)
                                <ul>
                                    <li><a href="{{ route('category.product.view',['id'=>$category->slug]) }}">{{ $category->name }}</a></li>
                                </ul>
                                @endforeach
                            </div>
                            <div class="sidebar__item">
                                <h4>Brands</h4>
                                @foreach ($brands as $brand)
                                <ul>
                                    <li><a href="{{ route('brand.product.view',['id'=>$brand->id]) }}">{{ $brand->name }}</a></li>
                                </ul>
                                @endforeach
                            </div>
                            <div class="sidebar__item">
                                <div class="latest-product__text">
                                    <h4>Latest Products</h4>
                                    <div class="latest-product__slider owl-carousel">
                                        <div class="latest-prdouct__slider__item">
                                            @foreach ($latestProducts as $product)
                                            <a href="#" class="latest-product__item">
                                                <div class="latest-product__item__pic">
                                                    <img src="{{ asset('admin/product-image/'.$product->image) }}" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6>{{ $product->name }}</h6>
                                                    <span>{{ $product->discount_amount ? $product->discount_amount : $product->price }} {{ generalSettings('currency') }} </span>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="product__discount">
                            <div class="section-title product__discount__title">
                                <h2>Sale Off</h2>
                            </div>
                            <div class="row">
                                <div class="product__discount__slider owl-carousel">
                                    @foreach ($offerProducts as $product)
                                    <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                data-setbg="{{ asset('admin/product-image/'.$product->image) }}">
                                                <div class="product__discount__percent">{{ $product->discount_amount }} {{ $product->discount_type == 1 ? '%' : '৳' }}</div>
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#" data-id="{{ $product->id }}" class="addToWishlist"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="{{ route('product.single.view', ['id'=>$product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#" data-id="{{ $product->id }}" class="directAddToCart"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>{{ $product->category->name }}</span>
                                                <h5><a href="#">{{ $product->name }}</a></h5>
                                                <div class="product__item__price">{{ $product->discount_amount }} {{ generalSettings('currency') }} <span>{{ $product->price }}{{ generalSettings('currency') }}</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="filter__item">
                            <div class="section-title product__discount__title">
                                <h2>Products</h2>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-7">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="{{ asset('admin/product-image/'. $product->image) }}">
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#" data-id="{{ $product->id }}" class="addToWishlist"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="{{ route('product.single.view', ['id'=>$product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                                @if($product->qty > 0)
                                                <li><a href="#" data-id="{{ $product->id }}" class="directAddToCart"><i class="fa fa-shopping-cart "></i></a></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6><a href="{{ route('product.single.view', ['id'=>$product->id]) }}">{{ $product->name }}</a></h6>
                                            <h5>{{ $product->discount_amount ? $product->discount_amount : $product->price }} {{ generalSettings('currency') }} </h5>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="pagination">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Section End -->
@endsection

@push('scripts')

@endpush
