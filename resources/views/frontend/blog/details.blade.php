@extends('frontend.master')

@section('title')
    Blog Details
@endsection

@section('body')

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__item">
                            <h4>Blog Categories</h4>
                            <ul>
                                @foreach ($blogCategories as $category)
                                <li><a href="{{ route('category.blog.view', ['id'=>$category->id]) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                @foreach ($recentNews as $rnews)
                                <a href="{{ route('blog.single.view', ['id'=>$rnews->id]) }}" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="{{ asset('admin/blog-image/'. $rnews->image) }}" alt="" width="150" height="150">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>{{ Str::substr($rnews->title, 0, 30) }}</h6>
                                        <span>Author: {{ $rnews->user->name}}</span><br>
                                        <span>Date: {{ $rnews->created_at->format('m-d-Y') }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="{{ asset('admin/blog-image/'.$blog->image) }}" alt="">
                        <p>{{ $blog->description }}</p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{{ asset('admin/profile/'.$blog->user->image) }}" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6>{{ $blog->user->name }}</h6>
                                        <span>Date: {{ $blog->created_at->format('m-d-Y') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> {{ $blog->blogCategory->name }}</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
@endsection

