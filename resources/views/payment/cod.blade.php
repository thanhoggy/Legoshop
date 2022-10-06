@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <h3 class="text-center">Đơn hàng của bạn đã được đặt thành công</h3>
        <p class="text-center">Cảm ơn bạn! Vui lòng chuẩn bị đúng số tiền <b>{{$who_buying->grand_total}} VND </b> khi nhận hàng! </p>
        <p class="text-center">Chúng tôi sẽ liên hệ với bạn qua email (<b>{{$user_order->users_email}}</b>) hoặc số điện thoại (<b>{{$user_order->mobile}}</b>)</p>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection