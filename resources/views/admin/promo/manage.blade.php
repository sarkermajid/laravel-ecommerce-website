@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Promo Codes</h4>
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
                                <th>Title</th>
                                <th>Type</th>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Limit</th>
                                <th>Used</th>
                                <th>Expire Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promoCodes as $promoCode)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $promoCode->title }}</td>
                                    <td>{{ $promoCode->type == 0 ? 'Fixed Price' : 'Percentage' }}</td>
                                    <td>{{ $promoCode->code }}</td>
                                    <td>{{ $promoCode->discount }}</td>
                                    <td>{{ $promoCode->limit }}</td>
                                    <td>{{ $promoCode->used }}</td>
                                    <td>{{ $promoCode->expire_date }}</td>
                                    <td><a href="" data-id="{{ $promoCode->id }}"
                                        class="btn btn-sm promo-status {{ $promoCode->status == 1 ? 'btn-success' : 'btn-danger' }}">{{ $promoCode->status == 1 ? 'Active' : 'Inactive' }}</a>
                                    </td>
                                    <td>
                                        <div>
                                            <a href="{{ route('promo.view', ['id' => $promoCode->id]) }}"
                                                class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i> View</a>
                                             <a href="{{ route('promo.edit', ['id' => $promoCode->id]) }}"
                                                 class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                             <a href="" data-id="{{ $promoCode->id }}" class="btn btn-outline-danger btn-sm show_confirm promo-delete" data-toggle="tooltip"><i class="fa fa-trash"></i> Delete</a>
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

    </script>
@endpush
