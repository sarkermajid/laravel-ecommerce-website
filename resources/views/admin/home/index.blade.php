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
            <h3 class="text-white">Total Users</h3>
            <h4 class="text-white">{{ $totalUser }}</h4>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body bg-info">
            <h3 class="text-white">Total Categories</h3>
            <h4 class="text-white">{{ $totalCategory }}</h4>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body bg-warning">
            <h3 class="text-white">Total Products</h3>
            <h4 class="text-white">1</h4>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-body bg-danger">
            <h3 class="text-white">Total Order </h3>
            <h4 class="text-white">3</h4>
        </div>
    </div>
</div>

@push('scripts')
    <script>

    </script>
@endpush
@endsection
