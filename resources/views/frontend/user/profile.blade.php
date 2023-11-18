@extends('frontend.master')

@section('body')
<div class="container">
    <div class="row py-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header text-center" style="background-color: #1C1C1C">
                    <h1 class="text-center profile-heading-btn text-center" style="background-color: #1C1C1C">Profile</h1>
                </div>
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
                            <tr>
                                <td class="payment-title"><strong></strong></td>
                                <td class="text-style"><a href="{{ route('user.edit', ['id'=>$user->id]) }}" class="site-btn">Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection
