@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Contact Message</h4>
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
                                <td class="text-style">{{ $contactMessage->name }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Email :</strong></td>
                                <td class="text-style">{{ $contactMessage->email }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Message:</strong></td>
                                <td class="text-style">{{ $contactMessage->message }}</td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
