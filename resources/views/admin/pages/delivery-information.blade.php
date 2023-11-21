@extends('admin.master')


@section('body')
    <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Delivery Information</h4>
                        </div>
                    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('delivery-information.update', $deliveryInformation->id ?? '') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="delivery_information">Delivery Information Content</label>
                            <textarea name="delivery_information" id="summernote" class="form-control" rows="3">{{ $deliveryInformation->delivery_information ?? '' }}</textarea>
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
