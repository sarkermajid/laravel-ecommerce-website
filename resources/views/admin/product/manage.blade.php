@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Products</h4>
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
                                <th>Name</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->brand->name }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount_amount }}</td>
                                    <td><img src="{{ asset('admin/product-image/'.$product->image) }}" height="50" width="70"
                                            alt=""></td>
                                    <td><a href="" data-id="{{ $product->id }}" class="btn btn-sm product-status {{ $product->status == 1 ? 'btn-success' : 'btn-danger' }}">{{ $product->status == 1 ? 'Active' : 'Inactive' }}</a>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ route('product.view', ['id' => $product->id]) }}"
                                                class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> Details</a>
                                             <a href="{{ route('product.edit', ['id' => $product->id]) }}"
                                                 class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                             <a href="" data-id="{{ $product->id }}" class="btn btn-outline-danger btn-sm show_confirm product-delete" data-toggle="tooltip"><i class="fa fa-trash"></i> Delete</a>
                                        </div>
                                    </td>
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

    <script type="text/javascript">

        // $('.show_confirm').click(function(event) {
        //      var form =  $(this).closest("form");
        //      var name = $(this).data("name");
        //      event.preventDefault();
        //      swal({
        //          title: `Are you sure?`,
        //          text: "You won't be able to revert this!",
        //          icon: "warning",
        //          buttons: true,
        //          dangerMode: true,
        //      })
        //      .then((willDelete) => {
        //        if (willDelete) {
        //          form.submit();
        //        }
        //      });
        //  });

    </script>
@endpush
