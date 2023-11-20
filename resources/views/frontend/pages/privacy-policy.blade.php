@extends('frontend.master')

@section('title')
    Privacy Policy
@endsection

@section('body')
<div class="container">
    <div class="row py-5">
        <p>{!! $privacyPolicy->privacy_policy !!}</p>
    </div>
</div>
@endsection
