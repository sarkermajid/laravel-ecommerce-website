@extends('frontend.master')

@section('title')
    Blog
@endsection

@section('body')
        <!-- Blog Section Begin -->
        <section class="blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
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
                    <div class="col-lg-8 col-md-7">
                        <div class="row">
                            @foreach ($categoryWiseBlogs as $blog)
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__item">
                                    <div class="blog__item__pic">
                                        <img src="{{ asset('admin/blog-image/'.$blog->image) }}" alt="">
                                    </div>
                                    <div class="blog__item__text">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i> {{ $blog->created_at->format('m-d-Y') }}</li>
                                            <li><i class="fa fa-user"></i> {{ $blog->user->name }}</li>
                                        </ul>
                                        <h5><a href="#">{{ $blog->title }}</a></h5>
                                        <a href="{{ route('blog.single.view', ['id'=>$blog->id]) }}" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-12">
                                <div class="product__pagination blog__pagination">
                                    <a href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
@endsection
