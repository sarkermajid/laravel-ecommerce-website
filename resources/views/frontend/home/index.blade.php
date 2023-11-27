@extends('frontend.master')

@section('title')
    eCom
@endsection

@push('styles')
    {{-- jquery autocomplete search css link --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endpush

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
                            <li><a href="{{ route('category.product.view',['id'=>$category->slug]) }}">{{ $category->name }}</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{ route('product.search') }}" method="POST">
                                @csrf
                                <input type="text" id="search-product" name="search_product" placeholder="What do you need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone" style="margin-top:15px"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>{{ generalSettings('shop_phone') }}</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('admin/banner-image/'.$banner->image)}}">
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
                            <h5><a href="{{ route('category.product.view',['id'=>$category->slug]) }}">{{ $category->name }}</a></h5>
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
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('admin/product-image/'.$product->image) ?? ''}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#" data-id="{{ $product->id }}" class="addToWishlist"><i class="fa fa-heart" style="margin-top:10px"></i></a></li>
                                <li><a href="{{ route('product.single.view', ['id'=>$product->slug]) }}"><i class="fa fa-eye" style="margin-top:10px"></i></a></li>
                                @if($product->qty > 0)
                                <li><a href="#" data-id="{{ $product->id }}" class="directAddToCart"><i class="fa fa-shopping-cart" style="margin-top:10px"></i></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">{{ $product->name }}</a></h6>
                            <h5>{{ $product->discount_amount ? $product->discount_amount : $product->price }} {{ generalSettings('currency') }} </h5>
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
                                <a href="{{ route('product.single.view', ['id'=>$latestProduct->id]) }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('admin/product-image/'.$latestProduct->image) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $latestProduct->name }}</h6>
                                        <span>{{ $latestProduct->discount_amount ? $latestProduct->discount_amount : $latestProduct->price }} {{ generalSettings('currency') }}</span>
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
                                <a href="{{ route('product.single.view', ['id'=>$trendingProduct->id]) }}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{ asset('admin/product-image/'.$trendingProduct->image) }}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{ $trendingProduct->name }}</h6>
                                        <span>{{ $trendingProduct->discount_amount ? $trendingProduct->discount_amount : $trendingProduct->price }} {{ generalSettings('currency') }}</span>
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
                                <a href="{{ route('brand.product.view',['id'=>$brand->id]) }}" class="latest-product__item">
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
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
{{-- jquery autocomplete for search --}}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    var availableTags = [
        $.ajax({
            url: "{{ route('product.list') }}",
            method: 'GET',
            success:function(res){
                startAutoComplete(res);
            }
        })
    ];

    function startAutoComplete(availableTags){
        $( "#search-product" ).autocomplete({
          source: availableTags
        });
    }

</script>
