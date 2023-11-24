@extends('frontend.master')

@section('title')
    About Us
@endsection

@section('body')
<div class="container">
    <div class="row py-5">
        <p>{!! $aboutUs->about_us  ?? ''!!}</p>
    </div>
</div>
@endsection
