@extends('admin.master')


@section('body')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Dashboard</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card card-body bg-success">
            <h3 class="text-white">Total Orders</h3>
            <h4 class="text-white">12</h4>
        </div>
    </div>
    <div class="col-md-6">
        <a href="{{ route('user.manage') }}">
            <div class="card card-body bg-dark">
                <h3 class="text-white">Total Users</h3>
                <h4 class="text-white">{{ $totalUsers }}</h4>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ route('category.manage') }}">
            <div class="card card-body bg-info">
                <h3 class="text-white">Total Categories</h3>
                <h4 class="text-white">{{ $totalCategories }}</h4>
            </div>
        </a>

    </div>
    <div class="col-md-6">
        <a href="{{ route('product.manage') }}">
            <div class="card card-body bg-warning">
                <h3 class="text-white">Total Products</h3>
                <h4 class="text-white">1</h4>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ route('brand.manage') }}">
            <div class="card card-body bg-danger">
                <h3 class="text-white">Total Brands</h3>
                <h4 class="text-white">{{ $totalBrands }}</h4>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{ route('blog.manage') }}">
            <div class="card card-body bg-primary">
                <h3 class="text-white">Total Blogs</h3>
                <h4 class="text-white">{{ $totalBlogs }}</h4>
            </div>
        </a>
    </div>
</div>

@push('scripts')
    <script>

    </script>
@endpush
@endsection
