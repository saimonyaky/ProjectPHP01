@extends('user.layout.main')
@section('content')
    @include('user.layout.navbar')
    <div data-vide-bg="img/banner/video">
        <div class="container">
            <div class="banner-info">
                <h3>A Trusted Place For Technology Enthusiasts</h3>
                <div class="search-form">
                    <form action="#" method="post">
                        <input type="text" placeholder="Search..." name="Search...">
                        <input type="submit" value=" ">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--content-->
    <div class="content-top ">
        <div class="container ">
            <div class="spec ">
                <h3>Special Offers</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
                <div class="tab-head ">
                    <nav class="nav-sidebar">
                        <ul class="nav tabs ">
                            <li class="active"><a href="#tab1" data-toggle="tab">PC Component</a></li>
                            <li class=""><a href="#tab2" data-toggle="tab">Gaming Gear</a></li>
                            <li class=""><a href="#tab3" data-toggle="tab">Console</a></li>
                        </ul>
                    </nav>
                    <div class=" tab-content tab-content-t ">
                        <div class="tab-pane active text-style" id="tab1">
                            <div class=" con-w3l">
                                @foreach ($dataPc as $key => $val)
                                    <div class="col-md-3 m-wthree">
                                        <div class="col-m">
                                            <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                                <img src="{{ asset($val['image']) }}" class="img-responsive" alt="">
                                                <div class="offer">
                                                    <p><span>Offer</span></p>
                                                </div>
                                            </a>
                                            <div class="mid-1">
                                                <div class="women">
                                                    <h6><a href="single.html">{{ $val['name'] }}</a>| 36M Cache, up
                                                        to 6.00
                                                        GHz</h6>
                                                </div>
                                                <div class="mid-2">
                                                    <p><label>{{ $val['price'] }}</label><em
                                                            class="item_price">{{ $val['sale'] }}</em></p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="add">
                                                    <button class="btn btn-danger my-cart-btn my-cart-b "
                                                        data-id="{{ $val['id'] }}" data-name="{{ $val['name'] }}"
                                                        data-summary="summary 1" data-price="{{ $val['sale'] }}"
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
                        <div class="tab-pane  text-style" id="tab2">
                            <div class=" con-w3l">
                                @foreach ($dataGear as $key => $val)
                                    <div class="col-md-3 m-wthree">
                                        <div class="col-m">
                                            <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                                                <img src="{{ asset($val['image']) }}" class="img-responsive"
                                                    alt="">
                                                <div class="offer">
                                                    <p><span>Offer</span></p>
                                                </div>
                                            </a>
                                            <div class="mid-1">
                                                <div class="women">
                                                    <h6><a href="single.html">{{ $val['name'] }}</a>| 36M Cache,
                                                        up to 6.00
                                                        GHz</h6>
                                                </div>
                                                <div class="mid-2">
                                                    <p><label>{{ $val['price'] }}</label><em
                                                            class="item_price">{{ $val['sale'] }}</em></p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="add">
                                                    <button class="btn btn-danger my-cart-btn my-cart-b "
                                                        data-id="{{ $val['id'] }}" data-name="{{ $val['name'] }}"
                                                        data-summary="summary 1" data-price="{{ $val['sale'] }}"
                                                        data-quantity="1" data-image="{{ $val['image'] }}">Add to
                                                        Cart</button>
                                                </div>
                                                >>>>>>> Stashed changes

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="tab-pane  text-style" id="tab3">
                            <div class=" con-w3l">
                                @foreach ($dataGear as $key => $val)
                                    <div class="col-md-3 m-wthree">
                                        <div class="col-m">
                                            <a href="#" data-toggle="modal" data-target="#myModal1"
                                                class="offer-img">
                                                <img src="{{ asset($val['image']) }}" class="img-responsive"
                                                    alt="">
                                                <div class="offer">
                                                    <p><span>Offer</span></p>
                                                </div>
                                            </a>
                                            <div class="mid-1">
                                                <div class="women">
                                                    <h6><a href="single.html">{{ $val['name'] }}</a>| 36M Cache,
                                                        up to
                                                        6.00 GHz</h6>
                                                </div>
                                                <div class="mid-2">
                                                    <p><label>{{ $val['price'] }}</label><em
                                                            class="item_price">{{ $val['sale'] }}</em></p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="add">
                                                    <button class="btn btn-danger my-cart-btn my-cart-b "
                                                        data-id="{{ $val['id'] }}" data-name="{{ $val['name'] }}"
                                                        data-summary="summary 1" data-price="{{ $val['sale'] }}"
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
                </div>
            </div>
        </div>
    </div>

    <!--content-->
    <div class="content-mid">
        <div class="container">

            <div class="col-md-4 m-w3ls">
                <div class="col-md1 ">
                    <a href="{{ route('pccomponent') }}">
                        <img src="img/banner/co1.jpg" class="img-responsive img" alt="">
                        <div class="big-sa">
                            <h6>New Collections</h6>
                            <h3>Computer <span>Component</span></h3>
                            <p>There are a variety of computer configurations for you to choose, let's build your
                                most
                                suitable PC setup.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 m-w3ls1">
                <div class="col-md ">
                    <a href="{{ route('console') }}">
                        <img src="img/banner/co.jpg" class="img-responsive img" alt="">
                        <div class="big-sale">
                            <div class="big-sale1">
                                <h3>Big <span>Sale</span></h3>
                                <p>Discounts up to 50% on many products.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 m-w3ls">
                <div class="col-md2 ">
                    <a href="{{ route('pccomponent') }}">
                        <img src="img/banner/co2.jpg" class="img-responsive img1" alt="">
                        <div class="big-sale2">
                            <h3>RAM <span>RGB</span></h3>
                            <p>High speed RAM with beautiful RGB LED.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md3 ">
                    <a href="{{ route('pccomponent') }}">
                        <img src="img/banner/co3.jpg" class="img-responsive img1" alt="">
                        <div class="big-sale3">
                            <h3>SSD <span>NVMe</span></h3>
                            <p>Large capacity Hard drive with extremely fast read and write speed.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--content-->
    <!-- Carousel
                ================================================== -->
    @include('user.layout.carousel')

    <!--content-->
    <div class="product">
        <div class="container">
            <div class="spec ">
                <h3>Top Selling</h3>
                <div class="ser-t">
                    <b></b>
                    <span><i></i></span>
                    <b class="line"></b>
                </div>
            </div>
            <div class=" con-w3l">
                @foreach ($dataTop as $key => $val)
                    <div class="col-md-3 pro-1">
                        <div class="col-m">
                            <a href="#" data-toggle="modal" data-target="#myModal17" class="offer-img">
                                <img src="{{ asset($val['image']) }}" class="img-responsive" alt="">
                            </a>
                            <div class="mid-1">
                                <div class="women">
                                    <h6>{{ $val['name'] }}</h6>
                                </div>
                                <div class="mid-2">
                                    <p><label>{{ $val['price'] }}</label><em class="item_price">{{ $val['sale'] }}</em>
                                    </p>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="add add-2">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5"
                                        data-name="{{ $val['name'] }}" data-summary="summary 5"
                                        data-price="{{ $val['sale'] }}" data-quantity="1"
                                        data-image="{{ $val['image'] }}">Add to Cart</button>
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
