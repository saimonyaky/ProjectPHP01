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
           <a href="pccomponent.html"><img class="first-slide" src="images/ba.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="gaminggear.html"> <img class="second-slide " src="images/ba1.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
           <a href="console.html"><img class="third-slide " src="images/ba2.jpg" alt="Third slide"></a>
          
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
			<a href="single - pc1.html">
				<img src="images/ki.jpg" class="img-responsive" alt="">
			</a>
			<h6>GIGABYTE Z390 AORUS Xtreme Waterforce LGA1151v2</h6>
			<p>20,590,000 VND</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="single - pc2.html">
				<img src="images/ki1.jpg" class="img-responsive" alt="">
			</a>
			<h6>ASUS ROG Zenith II Extreme</h6>
			<p>19,370,000 VND</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="single - pc3.html">
				<img src="images/ki2.jpg" class="img-responsive" alt="">
			</a>
			<h6>MSI MEG Z390 Godlike LGA1151v2</h6>
			<p>14,790,000 VND</p>
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
										<img src="images/13KS.jpg" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6><a href="single.html">Intel® Core™ i9-13900KS Processor</a></h6>							
										</div>
										<div class="mid-2">
											<p ><label>25,490,000</label><em class="item_price">22,900,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Intel Core i9-13900KS" data-summary="summary 1" data-price="22900000" data-quantity="1" data-image="images/13KS.jpg">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
										<img src="images/i7- 13KS.webp" class="img-responsive" alt="">
										<div class="offer"><p><span>Offer</span></p></div>
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>Intel® Core™ i7-13700KS Processor</h6>							
										</div>
										<div class="mid-2">
											<p ><label>21,710,000</label><em class="item_price">19,900,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
												<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Intel Core i7 i7-13700HX" data-summary="summary 2" data-price="19900000" data-quantity="1" data-image="images/i7- 13KS.webp">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
										<img src="images/of4.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>ROG Strix GeForce RTX 2080 Ti OC 11GB GDDR6</h6>							
										</div>
										<div class="mid-2">
											<p ><label>39,500,000</label><em class="item_price">36,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="ROG Strix GeForce RTX 2080 Ti OC" data-summary="summary 5" data-price="36990000" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
										<img src="images/of5.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>MSI RTX 2080TI Gaming X Trio 11GB GDDR6</h6>							
										</div>
										<div class="mid-2">
											<p ><label>35,990,000</label><em class="item_price">33,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="MSI RTX 2080TI Gaming X Trio" data-summary="summary 6" data-price="33990000" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="images/of18.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>ASUS ROG Zenith II Extreme</h6>							
										</div>
										<div class="mid-2">
											<p ><label>20,000,000</label><em class="item_price">19,370,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="19" data-name="ASUS ROG Zenith II Extreme" data-summary="summary 19" data-price="19370000" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
										<img src="images/of19.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>MSI MEG Z390 Godlike LGA1151v2</h6>							
										</div>
										<div class="mid-2">
											<p ><label>15,000,000</label><em class="item_price">14,790,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="20" data-name="MSI MEG Z390 Godlike" data-summary="summary 20" data-price="14790000" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
										<img src="images/of30.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>SAMSUNG 970 Evo Plus 1TB M.2 NVMe</h6>							
										</div>
										<div class="mid-2">
											<p ><label>6,550,000</label><em class="item_price">6,190,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="23" data-name="SAMSUNG 970 Evo Plus 1TB" data-summary="summary 23" data-price="6190000" data-quantity="1" data-image="images/of30.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
										<img src="images/of31.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>SAMSUNG 970 Pro 512GB M.2 NVMe</h6>							
										</div>
										<div class="mid-2">
											<p ><label>5,000,000</label><em class="item_price">4,350,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="24" data-name="SAMSUNG 970 Pro 512GB" data-summary="summary 24" data-price="4350000" data-quantity="1" data-image="images/of31.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
								<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal9" class="offer-img">
										<img src="images/of32.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>(16G DDR4 3600 2x8G) G.SKILL Trident Z Neo</h6>							
										</div>
										<div class="mid-2">
											<p ><label>5,000,000</label><em class="item_price">4,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="25" data-name="(16G DDR4 3600 2x8G) G.SKILL Trident Z Neo" data-summary="summary 25" data-price="4990000" data-quantity="1" data-image="images/of32.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal10" class="offer-img">
										<img src="images/of33.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>(16GB DDR4 3200 2x8G) HyperX Fury RGB</h6>							
										</div>
										<div class="mid-2">
											<p ><label>2,690,000</label><em class="item_price">2,450,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="26" data-name="(16GB DDR4 3200 2x8G) HyperX Fury RGB" data-summary="summary 26" data-price="2450000" data-quantity="1" data-image="images/of33.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal11" class="offer-img">
										<img src="images/of34.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>WD Black 4TB SATA3 7200rpm</h6>							
										</div>
										<div class="mid-2">
											<p ><label>5,200,000</label><em class="item_price">4,930,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="27" data-name="WD Black 4TB" data-summary="summary 27" data-price="4930000" data-quantity="1" data-image="images/of34.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal12" class="offer-img">
										<img src="images/of35.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>WD Black 1TB SATA3 7200rpm</h6>							
										</div>
										<div class="mid-2">
											<p ><label>2,000,000</label><em class="item_price">1,900,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="28" data-name="WD Black 1TB" data-summary="summary 28" data-price="1900000" data-quantity="1" data-image="images/of35.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						 </div>
		</div>
	</div>
<!--footer-->
@endsection