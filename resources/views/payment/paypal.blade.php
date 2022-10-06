@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">Đơn hàng của bạn đã được đặt</h3>
        <p class="text-center">Số thứ tự đơn hàng của bạn là <b>{{$who_buying->id}}</b> Và tổng thanh toán là <b>{{$who_buying->grand_total}} VND </b> </p>
        <p class="text-center">Lego shop xin cảm ơn!</p>

    
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection