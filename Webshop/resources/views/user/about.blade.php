@extends('user.layout.main')
@section('content')
    @include('user.layout.navbar')
    <div class="banner-top">
        <div class="container">
            <h3>Your Order History</h3>
            <h4><a href="{{route('home')}}">Home</a><label>/</label>Order History</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <p align="center">
        <br /><br /><br /><br /><br />
        You didn't have any order before!
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </p>
@endsection