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
                    <table class="table" id="tableCategory">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ Str::substr($category->description, 0, 20) }}</td>
                                    <td><img src="{{ asset('admin/category-image/'.$category->image) }}" height="50" width="70"
                                            alt=""></td>
                                    <td><a href="" data-id="{{ $category->id }}" class="btn btn-sm category-status {{ $category->status == 1 ? 'btn-success' : 'btn-danger' }}">{{ $category->status == 1 ? 'Active' : 'Inactive' }}</a>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ route('category.view', ['id' => $category->id]) }}"
                                                class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View</a>
                                             <a href="{{ route('category.edit', ['id' => $category->id]) }}"
                                                 class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                             <form method="POST" action="{{ route('category.delete', ['id' => $category->id]) }}" style="display: inline">
                                                 @csrf
                                                 <input name="_method" type="hidden">
                                                 <button type="submit" class="btn btn-outline-danger btn-sm show_confirm" data-toggle="tooltip"><i class="fa fa-trash"></i> Delete</button>
                                             </form>
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

        $('.show_confirm').click(function(event) {
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Are you sure?`,
                 text: "You won't be able to revert this!",
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });

    </script>
@endpush
