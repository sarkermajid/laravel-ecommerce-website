@extends('frontend.master')

@section('body')
<div class="container">
    <div class="row py-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header text-center" style="background-color: #1C1C1C">
                    <h1 class="text-center profile-heading-btn text-center" style="background-color: #1C1C1C">Orders</h1>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->tracking_number }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->status == 0 ? 'Pending' : 'Completed' }}</td>
                                <td><a href="{{ route('user.orders.view',['id'=>$order->id]) }}" class="login-btn">view</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection
