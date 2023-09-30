@extends('user.layout.main')
@section('content')
@include('user.layout.navbar')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <a href="gaminggear.html"><img class="first-slide" src="images/ba2.jpg" alt="First slide"></a>

        </div>
        <div class="item">
            <a href="gaminggear.html"><img class="second-slide " src="images/ba.jpg" alt="Second slide"></a>

        </div>
        <div class="item">
            <a href="console.html"> <img class="third-slide " src="images/ba1.jpg" alt="Third slide"></a>

        </div>
    </div>

</div><!-- /.carousel -->

<!--content-->
<div class="kic-top ">
    <div class="container ">
        <div class="kic ">
            <h3>Top Selling</h3>

        </div>
        <div class="col-md-4 kic-top1">
            <a href="#">
                <img src="images/ki6.jpg" class="img-responsive" alt="">
            </a>
            <h6>SONY PlayStation 4 Pro 1TB MASTER</h6>
            <p>11,290,000 VND</p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="#">
                <img src="images/ki7.jpg" class="img-responsive" alt="">
            </a>
            <h6>SONY Playstation 4 Slim 1TB MASTER</h6>
            <p>8,790,000 VND</p>
        </div>
        <div class="col-md-4 kic-top1">
            <a href="#">
                <img src="images/ki8.jpg" class="img-responsive" alt="">
            </a>
            <h6>Microsoft XBOX One X 1TB White</h6>
            <p>12,880,000 VND</p>
        </div>
    </div>
</div>

<!--content-->
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Products</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l agileinf">
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                        <img src="images/of12.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>SONY PlayStation 4 Pro 2TB MASTER</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>12,890,000</label><em class="item_price">12,690,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="13"
                                data-name="SONY PlayStation 4 Pro 2TB" data-summary="summary 13" data-price="12690000"
                                data-quantity="1" data-image="images/of12.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
                        <img src="images/of13.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>SONY PlayStation 4 Pro 1TB MASTER</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>11,490,000</label><em class="item_price">11,290,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="14"
                                data-name="SONY PlayStation 4 Pro 1TB" data-summary="summary 14" data-price="11290000"
                                data-quantity="1" data-image="images/of13.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
                        <img src="images/of14.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>SONY Playstation 4 Slim 1TB MASTER</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>8,990,000</label><em class="item_price">8,790,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="15"
                                data-name="SONY Playstation 4 Slim 1TB" data-summary="summary 15"
                                data-price="8790000" data-quantity="1" data-image="images/of14.png">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
                        <img src="images/of15.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>SONY Dualshock4 Controller Black</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>1,350,000</label><em class="item_price">1,090,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="16"
                                data-name="SONY Dualshock4 Controller" data-summary="summary 16" data-price="1090000"
                                data-quantity="1" data-image="images/of15.png">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <p><br /> . <br /></p>

            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
                        <img src="images/of52.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>Microsoft XBOX One X 1TB Black</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>14,000,000</label><em class="item_price">12,880,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="17"
                                data-name="Microsoft XBOX One X 1TB Black" data-summary="summary 17"
                                data-price="12880000" data-quantity="1" data-image="images/of52.png">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
                        <img src="images/of23.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>Microsoft XBOX One X 1TB White</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>14,000,000</label><em class="item_price">12,880,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="18"
                                data-name="Microsoft XBOX One X 1TB White" data-summary="summary 18"
                                data-price="12880000" data-quantity="1" data-image="images/of23.png">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
                        <img src="images/of54.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>Microsoft XBOX Elite Controller 2</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>5,000,000</label><em class="item_price">4,650,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="21"
                                data-name="Microsoft XBOX Elite Controller 2" data-summary="summary 21"
                                data-price="4650000" data-quantity="1" data-image="images/of54.png">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
                        <img src="images/of55.png" class="img-responsive" alt="">
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6>Microsoft XBOX One Controller White</h6>
                        </div>
                        <div class="mid-2">
                            <p><label>1,790,000</label><em class="item_price">1,490,000 VND</em></p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b" data-id="22"
                                data-name="Microsoft XBOX One Controller" data-summary="summary 22"
                                data-price="1490000" data-quantity="1" data-image="images/of55.png">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection