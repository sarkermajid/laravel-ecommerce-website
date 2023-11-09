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
    <div class="col-md-4">
        <div class="card card-body" style="background-color: #ff5252">
            <h3 class="text-white">Total Orders</h3>
            <h4 class="text-white">12</h4>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-body" style="background-color: #2c2c54">
            <h3 class="text-white">Total Sales</h3>
            <h4 class="text-white">1850 BDT</h4>
        </div>
    </div>
    <div class="col-md-4">
        <a href="{{ route('user.admin.manage') }}">
            <div class="card card-body" style="background-color: #218c74">
                <h3 class="text-white">Total Users</h3>
                <h4 class="text-white">{{ $totalUsers }}</h4>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('category.manage') }}">
            <div class="card card-body" style="background-color: #b71540">
                <h3 class="text-white">Total Categories</h3>
                <h4 class="text-white">{{ $totalCategories }}</h4>
            </div>
        </a>

    </div>
    <div class="col-md-4">
        <a href="{{ route('product.manage') }}">
            <div class="card card-body" style="background-color: #2980b9">
                <h3 class="text-white">Total Products</h3>
                <h4 class="text-white">1</h4>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('brand.manage') }}">
            <div class="card card-body" style="background-color: #8e44ad">
                <h3 class="text-white">Total Brands</h3>
                <h4 class="text-white">{{ $totalBrands }}</h4>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('admin.contact.message') }}">
            <div class="card card-body" style="background-color: #0a3d62">
                <h3 class="text-white">Total Messages</h3>
                <h4 class="text-white">{{ $totalMessages }}</h4>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{ route('blog.manage') }}">
            <div class="card card-body" style="background-color: #e67e22">
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
