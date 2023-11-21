@extends('frontend.master')

@section('title')
    Delivery Informations
@endsection

@section('body')
<div class="container">
    <div class="row py-5">
        <p>{!! $deliveryInformation->delivery_information !!}</p>
    </div>
</div>
@endsection
