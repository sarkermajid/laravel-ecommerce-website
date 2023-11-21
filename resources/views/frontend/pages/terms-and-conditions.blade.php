@extends('frontend.master')

@section('title')
    Terms and Conditions
@endsection

@section('body')
<div class="container">
    <div class="row py-5">
        <p>{!! $termsAndCondition->terms_and_condition !!}</p>
    </div>
</div>
@endsection
