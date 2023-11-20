@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Promo</h4>
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
                                <td class="payment-title"><strong>Title :</strong></td>
                                <td class="text-style">{{ $promoCode->title }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Type :</strong></td>
                                <td class="text-style">{{ $promoCode->type == 1 ? 'Percentage' : 'Fixed amount' }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Code :</strong></td>
                                <td class="text-style">{{ $promoCode->code }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Limit :</strong></td>
                                <td class="text-style">{{ $promoCode->limit }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Used :</strong></td>
                                <td class="text-style">{{ $promoCode->used }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Discount :</strong></td>
                                <td class="text-style">{{ $promoCode->discount }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Created At :</strong></td>
                                <td class="text-style">{{ $promoCode->created_at->format('m-d-Y') }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Expire Date :</strong></td>
                                <td class="text-style">{{ $promoCode->expire_date }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Status :</strong></td>
                                <td class="text-style">{{ $promoCode->status == 1 ? 'Active' : 'Inactive'  }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
