@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Brands</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>Name :</strong></td>
                                <td class="text-style">{{ $brand->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Description :</strong></td>
                                <td class="text-style">{{ $brand->description }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Image :</strong></td>
                                <td class="text-dark "><img src="{{ asset('admin/brand-image/'.$brand->image) }} "style="border-radius: 10px;" alt="" width="150" height="150"/></td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Status :</strong></td>
                                <td class="text-style">{{ $brand->status == 1 ? 'Active' : 'Inactive'  }}</td>
                            </tr>

                            <tr>
                                <td class="payment-title"><strong>Created At :</strong></td>
                                <td class="text-style">{{ $brand->created_at->format('m/d/Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
