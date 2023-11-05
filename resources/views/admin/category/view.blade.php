@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Categories</h4>
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
                                <td class="text-style">{{ $category->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Slug :</strong></td>
                                <td class="text-style">{{ $category->slug }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Description :</strong></td>
                                <td class="text-style">{{ $category->description }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Image :</strong></td>
                                <td class="text-dark "><img src="{{ asset('admin/category-image/'.$category->image) }} "style="border-radius: 10px;" alt="" width="150" height="150"/></td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Status :</strong></td>
                                <td class="text-style">{{ $category->status == 1 ? 'Active' : 'Inactive'  }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Meta Title :</strong></td>
                                <td class="text-style">{{ $category->meta_title }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Meta Description :</strong></td>
                                <td class="text-style">{{ $category->meta_description }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Meta Keywords :</strong></td>
                                <td class="text-style">{{ $category->meta_keywords }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Created At :</strong></td>
                                <td class="text-style">{{ $category->created_at->format('m/d/Y') }}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
