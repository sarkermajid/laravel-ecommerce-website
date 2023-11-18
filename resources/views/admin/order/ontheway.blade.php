@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Pending Orders</h4>
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
                            @foreach ($onthewayOrders as $order)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td>{{ $order->created_at->format('m-d-Y') }}</td>
                                    <td>{{ $order->tracking_number }}</td>
                                    <td>{{ $order->total_price }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              {{ $order->status == 1 ? 'On The Way' : ''}}
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item completed" data-id="{{ $order->id }}" href="#">Completed</a></li>
                                            </ul>
                                          </div>
                                    </td>
                                    <td><a href="" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> Details</a></td>
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
