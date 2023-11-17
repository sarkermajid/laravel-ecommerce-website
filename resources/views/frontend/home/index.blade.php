@extends('frontend.master')

@section('title')
    Home
@endsection

@section('body')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        @foreach ($latestCategories as $category)
                        <ul>
                            <li><a href="{{ route('category.product.view',['id'=>$category->id]) }}">{{ $category->name }}</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('admin/banner-image/'. $banner->image) }}">
                        <div class="hero__text">
                            <h2>{{ $banner->title ?? ''}}</h2>
                            <p>{{ $banner->short_description ?? ''}}</p>
                            {{-- <a href="{{ route('shop') }}" class="primary-btn">SHOP NOW</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($categories as $category)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('admin/category-image/'. $category->image) }}">
                            <h5><a href="{{ route('category.product.view',['id'=>$category->id]) }}">{{ $category->name }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Products</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges .{{ $category->name }}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('admin/product-image/' . $product->image) }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="" data-id="{{ $product->id }}" class="addToWishlist"><i class="fa fa-heart"></i></a></li>
                                <li><a href="{{ route('product.single.view', ['id'=>$product->id]) }}"><i class="fa fa-eye"></i></a></li>
                                @if($product->qty > 0)
                                <li><a href="#" data-id="{{ $product->id }}" class="directAddToCart"><i class="fa fa-shopping-cart "></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $product->name }}</a></h6>
                            <h5>{{ $product->price }} {{ $product->currency }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->


    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($latestProductsDesc as $latestProduct )
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('admin/product-image/'.$latestProduct->image) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $latestProduct->name }}</h6>
                                        <span>{{ $latestProduct->price }} {{ $latestProduct->currency }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Trending Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($trendingProducts as $trendingProduct )
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('admin/product-image/'.$trendingProduct->image) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $trendingProduct->name }}</h6>
                                        <span>{{ $trendingProduct->price }} {{ $trendingProduct->currency }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Brands</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                @foreach ($brands as $brand )
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('admin/brand-image/'.$brand->image) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $brand->name }}</h6>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{ asset('admin/blog-image/'.$blog->image) }}" alt="" width="200" height="300">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> {{ $blog->created_at->format('m-d-Y') }}</li>
                                <li><i class="fa fa-user"></i> {{ $blog->user->name }}</li>
                            </ul>
                            <h5><a href="{{ route('blog.single.view', ['id'=>$blog->id]) }}">{{ $blog->title }}</a></h5>
                            <p>{{ Str::substr($blog->description, 0, 100) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
