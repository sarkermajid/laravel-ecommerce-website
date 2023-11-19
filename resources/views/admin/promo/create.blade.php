@extends('admin.master')


@push('styles')
<style>
    /* select2 css */
        .select2-selection{
            background: rgba(52, 82, 225,0.2) !important;
            border: inherit !important;
        }
        .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable{
            background: #3452E1 !important;
        }

        /* calender css */

        .class-link{
        color:#333333;
        text-decoration:none;
        }

        .class-link:hover{
        color:#ffbb00;
        }

        /* From here you can start to copy */
        .ui-datepicker {
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .ui-datepicker-header {
        height: 50px;
        line-height: 50px;
        color: #ffffff;
        background: #3452E1;
        margin-bottom: 10px;
        }
        .ui-datepicker-prev,
        .ui-datepicker-next {
        width: 20px;
        height: 20px;
        text-indent: 9999px;
        border-radius: 100%;
        cursor: pointer;
        overflow: hidden;
        margin-top: 12px;
        }
        .ui-datepicker-prev {
        float: left;
        margin-left: 12px;
        }
        .ui-datepicker-prev:after {
        transform: rotate(45deg);
        margin: -43px 0px 0px 8px;
        }
        .ui-datepicker-next {
        float: right;
        margin-right: 12px;
        }
        .ui-datepicker-next:after {
        transform: rotate(-135deg);
        margin: -43px 0px 0px 6px;
        }
        .ui-datepicker-prev:after,
        .ui-datepicker-next:after {
        content: '';
        position: absolute;
        display: block;
        width: 8px;
        height: 8px;
        border-left: 2px solid #ffffff;
        border-bottom: 2px solid #ffffff;
        }
        .ui-datepicker-prev:hover,
        .ui-datepicker-next:hover,
        .ui-datepicker-prev:hover:after,
        .ui-datepicker-next:hover:after {
        border-color: #333333;
        }
        .ui-datepicker-title {
        text-align: center;
        font-size:18px;
        }
        .ui-datepicker-calendar {
        width: 100%;
        text-align: center;
        }
        .ui-datepicker-calendar thead tr th span {
        display: block;
        width: 40px;
        color: #3452E1;
        margin-bottom: 5px;
        font-size: 18px;
        }
        .ui-state-default {
        display: block;
        text-decoration: none;
        color: #333333;
        line-height: 40px;
        font-size: 16px;
        }
        .ui-state-default:hover {
        color: #ffffff;
        background: #3452E1;
        border-radius:50px;
        transition: all 0.25s cubic-bezier(0.7, -0.12, 0.2, 1.12);
        }
        .ui-state-highlight {
        color: #ffffff;
        background-color: #3452E1;
        border-radius:50px;
        }

        .ui-state-active {
        color: #ffffff;
        background-color: #3452E1;
        border-radius:50px;
        }
        .ui-datepicker-unselectable .ui-state-default {
        color: #eee;
        border: 2px solid transparent;
        }
</style>
@endpush

@section('body')
    <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Create New Promo</h4>
                        </div>
                    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('promo.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            @error('title')
                                <h6 class="modal-header justify-content-start"
                                    style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                    {{ $message }}</h6>
                            @enderror
                            <input type="text" name="title" class="form-control" id="title">
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="type" class="form-label">Type</label>
                                    <select name="type"
                                    class="form-control select2 @error('type') is-invalid @enderror">
                                        <option value="0">Fixed Amount</option>
                                        <option value="1">Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="code" class="form-label">Code</label>
                                    @error('code')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <input type="text" name="code"
                                        class="form-control @error('code') is-invalid @enderror" id="code"
                                        aria-describedby="emailHelp" placeholder="Code" value="{{ old('code') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="code" class="form-label">Discount</label>
                                    @error('discount')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <input type="number" name="discount"
                                        class="form-control @error('discount') is-invalid @enderror" id="code"
                                        aria-describedby="emailHelp" placeholder="Discount" value="{{ old('code') }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="limit" class="form-label">Limit</label>
                                    @error('limit')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6>
                                    @enderror
                                    <input type="number" name="limit"
                                        class="form-control @error('limit') is-invalid @enderror" id="limit"
                                        aria-describedby="emailHelp" placeholder="Limit" value="{{ old('limit') }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="" class="form-label">Expires At</label>
                                    @error('expire_date')
                                    <h6 class="modal-header justify-content-start"
                                        style="font-weight: 800; color: #ffffff; background-color: red; padding-top: 10px;  padding-bottom: 10px; font-size: 12px; max-width: 100%; border-radius: 5px;">
                                        {{ $message }}</h6> 
                                    @enderror
                                    <input placeholder="Select your date" type="text" name="expire_date" id="datepicker" autocomplete="off" value="" class="calendar form-control @error('expire_date') is-invalid @enderror">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <label for="Active" class="form-label"><input type="radio" name="status" value="1" id="Active" checked class="label radio">Active
                            </label>
                            &nbsp;
                            &nbsp;
                            <label for="Deactive" class="form-label"><input type="radio" name="status" value="0" id="Deactive" class="label radio">Deactive
                            </label>
                        </div>

                        <div>
                            <input type="submit" class="btn btn-primary" value="Create">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    // calender js
    jQuery(document).ready(function () {
        jQuery('#datepicker').datepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            startDate: '+1d'
        });
    });
</script>
{{-- for calender --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    // select2
    $('.select2').select2();
    $('[data-toggle="popover"]').popover();
</script>
@endpush
