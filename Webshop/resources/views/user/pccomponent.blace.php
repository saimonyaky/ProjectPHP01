<!DOCTYPE html>
<html>
<head>
<title>VNUA Computer Store</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="VNUA Store, Computer Store, VNUA Computer Store, Computer Shop, VNUA Computer Shop, VNUA Shop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
@include('user.layout.header')
  <!---->

    <!-- Carousel
    ================================================== -->
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
@include('user.layout.footer')
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
									
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

  
  
  
  <!-- product -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
									<div class="item">
										<img src="images/13KS.jpg" class="img-responsive" alt="">
									</div>
						</div>
						<div class="col-md-7 span-1 ">
							<h3>Intel® Core™ i9-13900KS Processor | 24 Cores - 32 Threads</h3>
							<p class="in-para">36M Cache, up to 6.00 GHz.</p>
							<div class="price_single">
							  <span class="reducedfrom "><del>25,490,000</del> 22,900,000 VND</span>
							
							 <div class="clearfix"></div>
							</div>
							<h4 class="quick">Quick Overview:</h4>
							<p class="quick_desc">
								Intel® Core™ i9-13900KS<br>
								Lithography: Intel 7<br>
								Number of Cores: 24<br>
								Number of Threads: 32<br>
								Processor Base Frequency: 3.2 GHz<br>
								Max Turbo Frequency: 5.5 GHz<br>
								Cache: 36 MB<br>
								Bus Speed: 8 GT/s<br>
								Max Memory Size: 128 GB<br>
								Memory Types: DDR5-5600<br>
								TDP: 150 W	
							</p>
							 <div class="add-to">
								   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="1" data-name="Intel Core i9 13900K" data-summary="summary 1" data-price="22900000" data-quantity="1" data-image="images/13KS.jpg">Add to Cart</button>
								</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
<!-- product -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/23426-cpu-intel-core-i7-13700k.jpg" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Intel® Core™ i7-13700HX Processor | 14 Cores - 20 Threads</h3>
									<p class="in-para">30M Cache, up to 5.00 GHz.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>21,710,000</del> 19,900,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
										Lithography: Intel 7<br>
										Number of Cores: 14<br>
										Number of Threads: 20<br>
										Processor Base Frequency: 2.1 GHz<br>
										Max Turbo Frequency: 5.0 GHz<br>
										Cache: 25 MB<br>
										Bus Speed: 8 GT/s<br>
										Max Memory Size: 128 GB<br>
										Memory Types: DDR5-5600<br>
										TDP: 55 W<br>
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="2" data-name="Intel Core i7 13700K" data-summary="summary 2" data-price="19900000" data-quantity="1" data-image="images/23426-cpu-intel-core-i7-13700k.jpg">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of4.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>ROG Strix GeForce RTX 2080 Ti OC Edition 11GB GDDR6</h3>
									<p class="in-para">NVIDIA’s newest flagship graphics card is a revolution in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breaVNUAhrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world’s ultimate gaming GPU. </p>
									<div class="price_single">
									  <span class="reducedfrom "><del>39,500,000</del> 36,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									DirectX 12: Power new visual effects and rendering techniques for more lifelike gaming. <br />
									4K: Step up to the ultimate 4K gaming experience with GeForce RTX and enjoy today’s biggest games in amazing detail. <br />
									Axial-tech Fans feature an all-around better design and IP5X dust resistance. <br />
									2.7-Slot Design expands cooling surface area by over 20% compared to last gen. <br />
									MaxContact Technology allows 2X more contact with the GPU chip for improved thermal transfer. <br />
									Auto-Extreme Technology uses automation to enhance reliability. <br />
									Super Alloy Power II includes premium alloy chokes, solid polymer capacitors, and an array of high-current power stages to fuel Turing™’s cores. <br />
									ASUS FanConnect II equips 2 hybrid-controlled fan headers for optimal system cooling. <br />
									GPU Tweak II provides intuitive performance tweaking and thermal controls.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="5" data-name="ROG Strix GeForce RTX 2080 Ti OC" data-summary="summary 5" data-price="36990000" data-quantity="1" data-image="images/of4.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of5.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>MSI RTX 2080TI Gaming X Trio 11GB GDDR6</h3>
									<p class="in-para">NVIDIA’s newest flagship graphics card is a revolution in gaming realism and performance. Its powerful NVIDIA Turing™ GPU architecture, breaVNUAhrough technologies, and 11 GB of next-gen, ultra-fast GDDR6 memory make it the world’s ultimate gaming GPU. </p>
									<div class="price_single">
									  <span class="reducedfrom "><del>35,990,000</del> 33,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Core/Memory: <br />
									Boost Clock / Memory Speed: 1755 MHz / 14 Gbps. <br />
									11GB GDDR6. <br /> <br />
									TORX FAN 3.0: Supremely silent: <br />
									Dispersion fan blade: Steeper curved blade accelerating the airflow. <br />
									Traditional fan blade: Provides steady airflow to massive heat sink below. <br />
									Double ball bearing: Strong and lasting core for years of smooth gaming. <br /> <br />
									TRI-FROZR Thermal Design: <br />
									Using three of the award-winning TORX Fans 3.0 with Double Ball Bearings. <br />
									Using groundbreaking aerodynamic techniques, the heatsink is optimized for efficient heat dissipation. <br /> <br />
									RGB Mystic Light: <br />
									Customize colors and LED effects with exclusive MSI software and synchronize the look & feel with other components. <br /> <br />
									Afterburner Overclocking Utility: <br />
									Wireless control through Android/iOS devices. <br />
									Predator: In-game video recording. <br />
									Kombustor: DirectX12 benchmark. <br />
									Supports multi-GPU setups. <br /> <br />
									Dragon Center: <br />
									1 click to optimize all you need for smooth gaming.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="6" data-name="MSI RTX 2080TI Gaming X Trio" data-summary="summary 6" data-price="33990000" data-quantity="1" data-image="images/of5.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of18.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>ASUS ROG Zenith II Extreme</h3>
									<p class="in-para">AMD TRX40 E-ATX motherboard sTRX4 for 3rd Gen Ryzen Threadripper, with 16 power stages, PCIe 4.0, Wi-Fi 6 (802.11ax), 10 Gbps Ethernet, USB3.2 Gen2x2, dual USB 3.2 front panel connector, five M.2, SATA and Aura Sync RGB.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>20,000,000</del> 19,370,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Ready for AMD 3rd Gen Ryzen™ Threadripper™ Processors: Maximize connectivity and speed with up to five M.2 drives, USB3.2 Gen2x2 and AMD StoreMI. <br />
									Robust power delivery: Optimized power solution with 16 Infineon TDA21472 power stages, ProCool II power connectors, microfine alloy chokes and 10K capacitors. <br />
									Comprehensive thermal design: Active-cooling VRM heatsink, PCIe-zone M.2 aluminum heatsink, backplate, Fan Extension Card II and water-cooling zone. <br />
									High-performance networking: Onboard Aquantia® 10 Gbps Ethernet, Wi-Fi 6 (802.11ax) with MU-MIMO support, and GameFirst V technology. <br />
									Unmatched personalization: Color OLED display and ASUS-exclusive Aura Sync RGB lighting, including two additional RGB headers and two addressable headers. <br />
									Industry-leading ROG audio: SupremeFX S1220 and ESS® SABRE9018Q2C for enthusiast-grade audio performance, featuring Japanese capacitors. <br />
									DIY-friendly design: Pre-mounted I/O shield, ASUS SafeSlot, BIOS FlashBack™ and FlexKey. <br />
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="19" data-name="ASUS ROG Zenith II Extreme" data-summary="summary 19" data-price="19370000" data-quantity="1" data-image="images/of18.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of19.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>MSI MEG Z390 Godlike LGA1151v2</h3>
									<p class="in-para">Overwhelming 18 phases VRM and brand-new infinity design, symbolizes the unlimited performance and power. Features Mystic Light Infinity, Dynamic Dashboard, Triple Turbo M.2 with Shield Frozr, XTREME Audio DAC and Dual Front USB 3.1 Gen2 Type-C connectors.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>15,000,000</del> 14,790,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Supports 9th / 8th Gen Intel® Core™ / Pentium® Gold / Celeron® processors for LGA 1151 socket. <br />
									Supports DDR4 Memory, up to 4600(OC) MHz. <br />
									Mystic Light Infinity: 16.8 million colors / 29 effects controlled in one click. Mystic Light Extension supports both RGB and RAINBOW LED strip. <br />
									Dynamic Dashboard: Built-in dynamic panel that indicates the status of GODLIKE and shows off your own personality. <br />
									Lightning Fast Game Experience: 1x Turbo U.2, 3x Turbo M.2 with Shield Frozr, Dual Front USB 3.1 Gen2 Type-C. <br />
									Xtreme Audio DAC: Isolated audio with ESS DAC, 2x audio processors & Nahimic to deliver the breathtaking sound quality with 384kHz/32-bit. <br />
									Killer xTend: Combine a built-in-switch with wireless extender. Killer fueled LAN & WIFI extender with ultimate traffic prioritization. <br />
									Pre-installed I/O Shielding: Better EMI protection and more convenience for installation. <br />
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="20" data-name="MSI MEG Z390 Godlike" data-summary="summary 20" data-price="14790000" data-quantity="1" data-image="images/of19.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of30.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>SAMSUNG 970 Evo Plus 1TB M.2 NVMe</h3>
									<p class="in-para">The ultimate in performance, upgraded. Faster than the 970 EVO, the 970 EVO Plus is powered by the latest V-NAND technology and firmware optimization. It maximizes the potential of NVMe bandwidth for unbeatable computing. In capacities up to 2TB, with reliability of up to 1,200 TBW.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>6,550,000</del> 6,190,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									The 970 EVO Plus reaches sequential read/write speeds up to 3,500/3,300 MB/s, up to 53% faster than the 970 EVO. Powered by the latest V-NAND technology—which brings greater NAND performance and higher power efficiency—along with optimized firmware, a proven Phoenix controller, and Intelligent TurboWrite boost speed. <br />
									The next advancement in NVMe SSDs. The 970 EVO Plus fits up to 1TB onto the compact M.2 (2280) form factor, greatly expanding storage capacity and saving space for other components. Samsung's innovative technology empowers you with the capacity to do more and accomplish more. <br />
									The new standard in sustainable performance. Get up to 600 TBW with a 5-year limited warranty for lasting performance. The 970 EVO Plus provides exceptional endurance powered by the latest V-NAND technology and Samsung's reputation for quality. <br />
									Achieve a new level of drive confidence. Samsung's advanced nickel-coated controller and heat spreader on the 970 EVO Plus enable superior heat dissipation. The Dynamic Thermal Guard automatically monitors and maintains optimal operating temperatures to minimize performance drops. <br />
									Advanced drive management made simple. The Samsung Magician software will help you keep an eye on your drive. A suite of user-friendly tools helps keep your drive up to date, monitor drive health and speed, and even boost performance.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="23" data-name="SAMSUNG 970 Evo Plus 1TB" data-summary="summary 23" data-price="6190000" data-quantity="1" data-image="images/of30.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of31.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>SAMSUNG 970 Pro 512GB M.2 NVMe</h3>
									<p class="in-para">Experience the best. For intensive workloads on PCs and workstations, the 970 PRO gives utmost performance enabled by Samsung's NVMe™ SSD leadership. The latest V-NAND technology and new Phoenix controller in a compact M.2 (2280) form factor surpass the demands of tech enthusiasts and professionals.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>5,000,000</del> 4,350,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Performance that puts you in command. The 970 PRO combines the next-gen PCIe Gen 3x4 NVMe interface with the latest V-NAND technology and a newly enhanced Phoenix controller to achieve fearless read/write speeds up to 3,500/2,700 MB/s*, approximately 30 percent faster than the previous generation. <br />
									Get the ultimate sustainable performance. The 970 PRO delivers up to 1,200 TBW* with a 5-year limited warranty, achieving 50 percent greater endurance than the previous generation, all powered by the latest V-NAND technology. <br />
									Achieve a new level of drive confidence. Samsung’s advanced nickel-coated controller and heat spreader on the 970 PRO enable superior heat dissipation. The Dynamic Thermal Guard automatically monitors and maintains optimal operating temperatures to minimize performance drops. <br />
									Advanced drive management made simple. Samsung Magician software will help you keep an eye on your drive. A suite of user-friendly tools helps keep your drive up to date, monitor drive health and speed, and even boost performance. 
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="24" data-name="SAMSUNG 970 Pro 512GB" data-summary="summary 24" data-price="4350000" data-quantity="1" data-image="images/of31.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of32.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>(16G DDR4 3600 2x8G) G.SKILL Trident Z Neo</h3>
									<p class="in-para">Engineered and optimized for full compatibility on the latest AMD Ryzen 3000 series processors on AMD X570 chipset motherboards, Trident Z Neo brings unparalleled memory performance and vibrant RGB lighting to any gaming PC or workstation with AMD Ryzen 3000 CPUs and AMD X570 motherboards.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>5,000,000</del> 4,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Engineered to scale memory performance with the latest AMD Ryzen 3000 series processors on the X570 platform, Trident Z Neo is optimized to push the platform to its maximum speed. <br />
									Designed with a contrast of black brushed aluminum and powder-coated silver, the Trident Z Neo dual-toned heatspreader adds power and boldness to your next-gen build. <br />
									Inspired by the racing stripes of sports cars and supercars, Trident Z Neo features a beveled edge along the top of the signature tri-fin design with the asymmetrical slant to achieve a sleek and clean look.	 <br />
									Crafted with hand-screened memory ICs and custom 10-layer PCBs, each and every module is made for maintaining the best signal integrity to achieve fast overclocking performance. <br />
									Tested across a wide range of motherboards to strict quality standards, Trident Z Neo memory kits are built for reliability, stability, and compatibility. <br />
									Fully control and customize the 8-zone RGB lighting through the downloadable Trident Z Lighting Control software. <br />
									Want to sync up your system lighting? You can use Asus Aura Sync*, Gigabyte RGB Fusion*, MSI Mystic Light*, or ASRock Polychrome Sync* software to personalize the colors and effects of your Trident Z Neo memory and compatible motherboards!
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="25" data-name="(16G DDR4 3600 2x8G) G.SKILL Trident Z Neo" data-summary="summary 25" data-price="4990000 " data-quantity="1" data-image="images/of32.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of33.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
								<h3>(16GB DDR4 3200 2x8G) HyperX Fury RGB</h3>
									
									<p class="in-para">Our engineers have predefined Intel Extreme Memory Profiles designed to maximize the performance of our memory modules, reaching speeds up to 3466MHz.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>2,690,000</del> 2,450,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									HyperX® FURY DDR4 RGB1 delivers a boost of performance and style with speeds of up to 3466MHz2, aggressive styling, and RGB lighting that runs the length of the module for smooth, stunning lighting effects. FURY DDR4 RGB is XMP-ready and available in 2400MHz–3466MHz speeds, CL15–16 latencies, single module capacities of 8GB and 16GB, and kit capacities of 16GB–64GB to give you a performance boost for your gaming, video editing, and rendering. It features Plug N Play automatic overclocking at 2400MHz and 2666MHz speeds and is compatible with both the latest Intel and AMD CPUs. 100% tested at speed and backed by a lifetime warranty, FURY DDR4 RGB’s your worry-free, cost-effective upgrade of choice.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="26" data-name="(16GB DDR4 3200 2x8G) HyperX Fury RGB" data-summary="summary 26" data-price="2450000" data-quantity="1" data-image="images/of33.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of34.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
								<h3>WD Black 4TB SATA3 7200rpm</h3>
									
									<p class="in-para">High Performance, Capacity, and Reliability for Your Computing Needs.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>5,200,000</del> 4,930,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									High performance, high capacity, high reliability; the ideal drive for those who demand the best. Available in a wide range of capacities in 2.5” and 3.5” form-factors, WD Black PC Hard Drives are designed to enhance the PC experience.<br />
									Build the ultimate gaming rig or install in your notebook. Perfect for high-performance applications like photo/video editing and gaming. Pair your hard drive with a Western Digital SSD for the ideal combination of speed and capacity.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="27" data-name="WD Black 4TB" data-summary="summary 27" data-price="4930000" data-quantity="1" data-image="images/of34.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				<!-- product -->
			<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="images/of35.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>WD Black 1TB SATA3 7200rpm</h3>
									<p class="in-para">High Performance, Capacity, and Reliability for Your Computing Needs.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>2,000,000</del> 1,900,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									High performance, high capacity, high reliability; the ideal drive for those who demand the best. Available in a wide range of capacities in 2.5” and 3.5” form-factors, WD Black PC Hard Drives are designed to enhance the PC experience.<br />
									Build the ultimate gaming rig or install in your notebook. Perfect for high-performance applications like photo/video editing and gaming. Pair your hard drive with a Western Digital SSD for the ideal combination of speed and capacity.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="28" data-name="WD Black 1TB" data-summary="summary 28" data-price="1900000" data-quantity="1" data-image="images/of35.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
				
</body>
</html>