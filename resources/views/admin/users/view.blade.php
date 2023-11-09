@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Blog Category</h4>
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
                                <td class="text-style">{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Email :</strong></td>
                                <td class="text-style">{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Phone :</strong></td>
                                <td class="text-style">{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Image :</strong></td>
                                <td class="text-dark "><img src="{{ asset('frontend/user-image/'.$user->image) }} "style="border-radius: 10px;" alt="" width="150" height="150"/></td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Joined At :</strong></td>
                                <td class="text-style">{{ $user->created_at->format('m/d/Y') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

