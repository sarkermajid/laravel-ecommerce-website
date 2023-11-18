@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">All Orders</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table" id="tableCategory">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allOrders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->created_at->format('m-d-Y') }}</td>
                                    <td>{{ $order->tracking_number }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>
                                        <div class="dropdown">
                                            @if($order->status == 0)
                                            <button class="btn btn-primary btn-sm dropdown-toggle" style="width: 85px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pending
                                            </button>
                                            @elseif ($order->status == 1)
                                            <button class="btn btn-info btn-sm dropdown-toggle" style="width: 85px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                On The Way
                                            </button>
                                            @elseif($order->status == 2)
                                            <button class="btn btn-success btn-sm dropdown-toggle" style="width: 85px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Completed
                                            </button>
                                            @else
                                            <button class="btn btn-danger btn-sm dropdown-toggle" style="width: 85px" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Cancle
                                            </button>
                                            @endif
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item pending" data-id="{{ $order->id }}" href="#">Pending</a></li>
                                              <li><a class="dropdown-item ontheway" data-id="{{ $order->id }}" href="#">On The Way</a></li>
                                              <li><a class="dropdown-item completed" data-id="{{ $order->id }}" href="#">Completed</a></li>
                                              <li><a class="dropdown-item cancel" data-id="{{ $order->id }}" href="#">Cancel</a></li>
                                            </ul>
                                          </div>
                                    </td>
                                    <td><a href="{{ route('order.view', ['id'=>$order->id]) }}" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> Details</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tableCategory').DataTable();
        });
    </script>

@endpush
