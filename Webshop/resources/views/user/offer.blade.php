@extends('user.layout.main')
@section('content')
    @include('user.layout.navbar')
    @include('user.layout.carousel')
    <!--content-->
    <div class="content-top offer-w3agile">
        <div class="container ">
            <div class="spec ">
                <h3>Special Offers</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l wthree-of">
                @foreach ($dataPc as $key => $val)
                    <div class="col-md-3 pro-1">
                        <div class="col-m" style="height: 320px">
                            <a href="#" data-toggle="modal" data-target="#model{{ $val['id'] }}" class="offer-img">
                                <img src="{{ asset($val['image']) }}" class="img-responsive" alt="">
                                <div class="offer">
                                    <p><span>Offer</span></p>
                                </div>
                            </a>
                            <div class="mid-1">
                                <div class="women">
                                    <h6><a href="single.html">{{ $val['name'] }}</a> | {{ $val['summary'] }}</h6>
                                </div>
                                <div class="mid-2">
                                    <p>
                                        @if ($val['sale'] != 0)
                                            <label>{{ $val['price'] }}</label>
                                        @endif
                                        <em class="item_price">
                                            @if ($val['sale'] == 0)
                                                {{ $val['price'] }}
                                            @else
                                                {{ $val['sale'] }}
                                            @endif
                                            VND
                                        </em>
                                    </p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{ $val['id'] }}"
                                        data-name="{{ $val['name'] }}" data-summary="summary 1"
                                        @if ($val['sale'] == 0) data-price="{{ $val['price'] }}"@else data-price="{{ $val['sale'] }}" @endif
                                        data-quantity="1" data-image="{{ $val['image'] }}">Add to
                                        Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($dataGear as $key => $val)
                    <div class="col-md-3 pro-1">
                        <div class="col-m" style="height: 320px">
                            <a href="#" data-toggle="modal" data-target="#model{{ $val['id'] }}" class="offer-img">
                                <img src="{{ asset($val['image']) }}" class="img-responsive" alt="">
                                <div class="offer">
                                    <p><span>Offer</span></p>
                                </div>
                            </a>
                            <div class="mid-1">
                                <div class="women">
                                    <h6><a href="single.html">{{ $val['name'] }}</a> | {{ $val['summary'] }}</h6>
                                </div>
                                <div class="mid-2">
                                    <p>
                                        @if ($val['sale'] != 0)
                                            <label>{{ $val['price'] }}</label>
                                        @endif
                                        <em class="item_price">
                                            @if ($val['sale'] == 0)
                                                {{ $val['price'] }}
                                            @else
                                                {{ $val['sale'] }}
                                            @endif
                                            VND
                                        </em>
                                    </p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{ $val['id'] }}"
                                        data-name="{{ $val['name'] }}" data-summary="summary 1"
                                        @if ($val['sale'] == 0) data-price="{{ $val['price'] }}"@else data-price="{{ $val['sale'] }}" @endif
                                        data-quantity="1" data-image="{{ $val['image'] }}">Add to
                                        Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($dataCs as $key => $val)
                    <div class="col-md-3 pro-1">
                        <div class="col-m" style="height: 320px">
                            <a href="#" data-toggle="modal" data-target="#model{{ $val['id'] }}" class="offer-img">
                                <img src="{{ asset($val['image']) }}" class="img-responsive" alt="">
                                <div class="offer">
                                    <p><span>Offer</span></p>
                                </div>
                            </a>
                            <div class="mid-1">
                                <div class="women">
                                    <h6><a href="single.html">{{ $val['name'] }}</a> | {{ $val['summary'] }}</h6>
                                </div>
                                <div class="mid-2">
                                    <p>
                                        @if ($val['sale'] != 0)
                                            <label>{{ $val['price'] }}</label>
                                        @endif
                                        <em class="item_price">
                                            @if ($val['sale'] == 0)
                                                {{ $val['price'] }}
                                            @else
                                                {{ $val['sale'] }}
                                            @endif
                                            VND
                                        </em>
                                    </p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{ $val['id'] }}"
                                        data-name="{{ $val['name'] }}" data-summary="summary 1"
                                        @if ($val['sale'] == 0) data-price="{{ $val['price'] }}"@else data-price="{{ $val['sale'] }}" @endif
                                        data-quantity="1" data-image="{{ $val['image'] }}">Add to
                                        Cart</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@include('user.layout.detail_product')