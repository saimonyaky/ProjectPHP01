@extends('user.layout.main')
@section('content')
    @include('user.layout.navbar')
    <div class="banner-top">
        <div class="container">
            <h3>Product</h3>
            <h4><a href="{{ route('home') }}">Home</a><label>/</label>Product</h4>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="single">
        <div class="container">
            <div class="single-top-main">
                <div class="col-md-5 single-top">
                    <div class="single-w3agile">

                        <div id="picture-frame">
                            <img src="/{{ $product->image }}" data-src="/{{ $product->image }}" alt=""
                                class="img-responsive" />
                        </div>
                        <script src="/js/jquery.zoomtoo.js"></script>
                        <script>
                            $(function() {
                                $("#picture-frame").zoomToo({
                                    magnify: 1
                                });
                            });
                        </script>
                    </div>
                </div>
                <div class="col-md-7 single-top-left ">
                    <div class="single-right">
                        <h3>{{ $product->name }}</h3>


                        <div class="pr-single">
                            <p class="reduced ">
                                    @if ($product->sale > 0)
                                        <del>{{ $product->price }}</del>
                                    @endif
                                @if ($product->sale == 0)
                                    {{ $product->price }}@else{{ $product->sale }}
                                @endif VND
                            </p>
                        </div>
                        <div class="block block-w3">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <p class="in-pa">
                            {{ $product->name }}<br>
                        </p>

                        <ul class="social-top">
                            <li><a href="#" class="icon facebook"><i class="fa fa-facebook"
                                        aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="icon twitter"><i class="fa fa-twitter"
                                        aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p"
                                        aria-hidden="true"></i><span></span></a></li>
                            <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble"
                                        aria-hidden="true"></i><span></span></a></li>
                        </ul>
                        <div class="add add-3">
                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{ $product->id }}"
                                data-name="{{ $product->name }}" data-summary="summary 1"
                                @if ($product->sale == 0) data-price="{{ $product->price }}"@else data-price="{{ $product->sale }}" @endif
                                data-quantity="1" data-image="{{ $product->image }}">Add to Cart</button>
                        </div>



                        <div class="clearfix"> </div>
                    </div>


                </div>
                <div class="clearfix"> </div>
            </div>


        </div>
    </div>
@endsection
