@extends('frontend.master')

@section('body')
<div class="container">
    <div class="row py-5">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header text-center" style="background-color: #1C1C1C">
                    <h1 class="text-center profile-heading-btn text-center" style="background-color: #1C1C1C">Order Details</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="payment-title"><strong>Name :</strong></td>
                                        <td class="text-style">{{ $order->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="payment-title"><strong>Phone :</strong></td>
                                        <td class="text-style">{{ $order->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td class="payment-title"><strong>Address :</strong></td>
                                        <td class="text-style">{{ $order->address }}</td>
                                    </tr>
                                    <tr>
                                        <td class="payment-title"><strong>City :</strong></td>
                                        <td class="text-style">{{ $order->city }}</td>
                                    </tr>
                                    <tr>
                                        <td class="payment-title"><strong>Zip Code :</strong></td>
                                        <td class="text-style">{{ $order->zip_code }}</td>
                                    </tr>
                                    <tr>
                                        <td class="payment-title"><strong>Date :</strong></td>
                                        <td class="text-style">{{ $order->created_at->format('m/d/Y') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItem as $item)
                                    <tr>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ $item->product_qty }}</td>
                                        <td>{{ $item->price }} {{ $item->product->currency }}</td>
                                        <td><img src="{{ asset('admin/product-image/'.$item->product->image) }}" alt="" width="100"></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h5 class="px-2">Total Price: <span class="float-right">{{ $order->total_price}}</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection
