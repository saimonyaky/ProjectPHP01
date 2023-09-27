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
@include('user.layout.header') <!---//header---->

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
          <a href="gaminggear.html"><img class="first-slide" src="images/ba1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
          <a href="pccomponent.html"><img class="second-slide " src="images/ba.jpg" alt="Second slide"></a>
         
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
			<a href="single - gaminggear1.html">
				<img src="images/ki3.jpg" class="img-responsive" alt="">
			</a>
			<h6> ASUS ROG Swift PG27VQ 27" TN 2K 165Hz WQHD G-Sync</h6>
			<p>20,490,000 VND</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="single - gaminggear2.html">
				<img src="images/ki4.jpg" class="img-responsive" alt="">
			</a>
			<h6>LG 34UC99-W 34" IPS 2K FreeSync</h6>
			<p>16,490,000 VND</p>
		</div>
		<div class="col-md-4 kic-top1">
			<a href="single - gaminggear3.html">
				<img src="images/ki5.jpg" class="img-responsive" alt="">
			</a>
			<h6>SAMSUNG C34F791WQE 34" VA 2K 100Hz FreeSync </h6>
			<p>12,999,000 VND</p>
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
										<img src="images/of8.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>ROG Strix PG27UQ 27" IPS 4K 144Hz G-Sync</h6>							
										</div>
										<div class="mid-2">
											<p ><label>70,000,000</label><em class="item_price">69,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="ROG Strix PG27UQ" data-summary="summary 9" data-price="69990000" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal2" class="offer-img">
										<img src="images/of10.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>SAMSUNG QLED LC49HG90 49" 2K 144Hz</h6>							
										</div>
										<div class="mid-2">
											<p ><label>47,888,000</label><em class="item_price">29,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="11" data-name="SAMSUNG QLED LC49HG90" data-summary="summary 11" data-price="29990000" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal3" class="offer-img">
										<img src="images/of38.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>CORSAIR K95 RGB Platinum Gunmetal</h6>							
										</div>
										<div class="mid-2">
											<p ><label>4,590,000</label><em class="item_price">4,290,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="29" data-name="CORSAIR K95 RGB Platinum Gunmetal" data-summary="summary 29" data-price="4290000" data-quantity="1" data-image="images/of38.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal4" class="offer-img">
										<img src="images/of39.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>ASUS ROG Strix Flare Keyboard</h6>							
										</div>
										<div class="mid-2">
											<p ><label>4,000,000</label><em class="item_price">3,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="30" data-name="ASUS ROG Strix Flare" data-summary="summary 30" data-price="3990000" data-quantity="1" data-image="images/of39.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="#myModal5" class="offer-img">
										<img src="images/of40.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>Logitech G903 HERO Wireless</h6>							
										</div>
										<div class="mid-2">
											<p ><label>4,300,000</label><em class="item_price">3,490,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="31" data-name="Logitech G903 HERO" data-summary="summary 31" data-price="3490000" data-quantity="1" data-image="images/of40.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal6" class="offer-img">
										<img src="images/of41.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>ASUS ROG Gladius II Aura RGB</h6>							
										</div>
										<div class="mid-2">
											<p ><label>2,300,000</label><em class="item_price">1,979,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="32" data-name="ASUS ROG Gladius II Aura RGB" data-summary="summary 32" data-price="1979000" data-quantity="1" data-image="images/of41.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal7" class="offer-img">
										<img src="images/of42.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>ASUS ROG Strix Fusion 500 Virtual 7.1</h6>							
										</div>
										<div class="mid-2">
											<p ><label>5,000,000</label><em class="item_price">4,990,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="33" data-name="ASUS ROG Strix Fusion 500" data-summary="summary 33" data-price="4990000" data-quantity="1" data-image="images/of42.png">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pro-1">
								<div class="col-m">
									<a href="#" data-toggle="modal" data-target="#myModal8" class="offer-img">
										<img src="images/of43.png" class="img-responsive" alt="">
									</a>
									<div class="mid-1">
										<div class="women">
											<h6>KINGSTON HyperX Cloud II Grey Metal</h6>							
										</div>
										<div class="mid-2">
											<p ><label>2,490,000</label><em class="item_price">2,090,000 VND</em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="34" data-name="KINGSTON HyperX Cloud II Grey Metal" data-summary="summary 34" data-price="2090000" data-quantity="1" data-image="images/of43.png">Add to Cart</button>
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
												<img src="images/of8.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>ASUS ROG Strix PG27UQ 27" IPS 4K 144Hz G-Sync</h3>
									<p class="in-para">ROG Swift PG27UQ Gaming Monitor – 27” 4K UHD (3840 x 2160), Overclockable 144Hz, G-SYNC HDR, Quantum-dot, IPS, Aura Sync.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>70,000,000</del> 69,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									27-inch 4K UHD (3840 x 2160) HDR gaming monitor with an overclockable 144Hz refresh rate for super-smooth gaming visuals. <br />
									NVIDIA G-SYNC HDR delivers lifelike contrast and color, with the brightest whites and darkest blacks bringing out details like never before. <br />
									Quantum-dot IPS display with a wide DCI-P3 color gamut provides realistic colors and smoother gradation. <br />
									ASUS Aura Sync technology creates immersive ambient lighting and supports synchronization with Aura-enabled components and peripherals. <br />
									New ROG Light Signal casts the ROG logo to create the perfect atmosphere for your gaming setup.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="9" data-name="ASUS ROG Strix PG27UQ" data-summary="summary 9" data-price="69990000" data-quantity="1" data-image="images/of8.png">Add to Cart</button>
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
												<img src="images/of10.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>SAMSUNG QLED LC49HG90 49" 2K 144Hz</h3>
									<p class="in-para">Groundbreaking 49-inch super ultra-wide 32:9 curved screen fills your field of view. <br />
									Quantum dot technology and HDR support provide stunningly realistic color and contrast.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>47,888,000</del> 29,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									The ultra-wide 49-inch screen with its innovative 32:9 aspect ratio means you always get to see game scenes in their entirety, exactly as their developers intended. And the 1800R curved panel immerses you in gameplay and delivers cinematic viewing for movies and video content. <br />
									With Quantum Dot technology, Samsung’s QLED Gaming Monitor provides an extreme upgrade in your gaming experience. Quantum dot makes today's games appear more lifelike by delivering a billion shades of accurate color.
									The CHG90 QLED Gaming Monitor features support for High Dynamic Range (HDR), so dark areas are darker and bright areas are brighter. See mind-blowing detail and contrast as bright blue skies share the screen with deep shadows and silhouettes. <br />
									The CHG90 supports AMD’s new Radeon FreeSync™ 2 technology, which gives gamers a smooth HDR gaming experience with twice the perceivable brightness and color of that offered by the sRGB spectrum. <br />
									Blending its advanced motion blur reduction technology with its superior VA panel, Samsung has created this curved monitor with a super-fast 1ms MPRT (motion picture response time) that lets you enjoy unprecedented gaming performance without motion blur across the entire screen. <br />
									The fast 144Hz screen refresh rate ensures you flawlessly smooth action scenes even in games with high frame rates. And you can adjust the refresh rate to 60Hz/120Hz when necessary.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="11" data-name="SAMSUNG QLED LC49HG90" data-summary="summary 11" data-price="29990000" data-quantity="1" data-image="images/of10.png">Add to Cart</button>
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
												<img src="images/of38.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>CORSAIR K95 RGB Platinum Gunmetal</h3>
									<p class="in-para">CORSAIR K95 RGB PLATINUM features CHERRY® MX Speed keyswitches backed by a lightweight aluminum frame. 8MB profile storage with hardware macro and lighting playback enable profile access independent of external software.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>4,590,000</del> 4,290,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									K95 PLATINUM takes CORSAIR performance to another level. Unleash unreal performance with CHERRY® MX mechanical switches. Store and playback complex macros and lighting effects to any key. Battle on a keyboard that can withstand a lifetime of use. <br />
									Assign complex in-game macros to any of the 6 dedicated macro keys. Textured so you can easily find them, contoured so you don’t accidentally press them. <br />
									K95 PLATINUM launches the CORSAIR best-in-class keyboards into another dimension of customization. Our iconic aircraft aluminum construction now features innovative LightEdge technology, so you can light up your mission control in spectacular full RGB. <br />
									K95 PLATINUM is also great on the road. Take your CUE profiles on the go with 8MB on-board storage. This means more time getting your head in the game, and less time setting up.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="29" data-name="CORSAIR K95 RGB Platinum Gunmetal" data-summary="summary 29" data-price="4290000 " data-quantity="1" data-image="images/of38.png">Add to Cart</button>
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
												<img src="images/of39.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>ASUS ROG Strix Flare</h3>
									<p class="in-para">ROG Strix Flare RGB mechanical gaming keyboard with Cherry MX switches, customizable illuminated badge and dedicated media keys for Gaming.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>4,000,000</del> 3,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									German-made Cherry MX RGB mechanical key switches that deliver satisfying mechanical feel with optimal actuation – The choice of professional gamers and enthusiasts. <br />
									Customizable illuminated badge – Boast your ROG pride or show your flair with a personal or team insignia. <br />
									Dedicated media keys and volume wheel positioned on the left for instant in-game audio control, a USB passthrough for easy connection and a detachable soft-touch wrist rest. <br />
									Individually backlit keys and vibrant underglow powered by Aura Sync RGB lighting technology. <br />
									Map macros on-the-fly to our fully programmable keys, adjust settings with enhanced ROG Armoury II software, and store profiles on the keyboard’s onboard memory. <br />
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="30" data-name="ASUS ROG Strix Flare" data-summary="summary 30" data-price="3990000" data-quantity="1" data-image="images/of39.png">Add to Cart</button>
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
												<img src="images/of40.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>Logitech G903 HERO Wireless</h3>
									<p class="in-para">With HERO 16K, LIGHTSPEED wireless gaming reaches its next evolution. The advanced HERO 16K sensor delivers unparalleled performance and class-leading efficiency. Add POWERPLAY for continuous wireless charging and the perfect LIGHTSPEED loadout.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>4,300,000</del> 3,490,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									It’s evolved. The addition of the advanced HERO 16K Sensor delivers unparalleled precision and performance with 1:1 tracking and 16,000 max DPI — plus zero smoothing, filtering, or acceleration. HERO 16K also offers 10x the power efficiency of the previous generation sensor, delivering improved battery life and reduced weight. <br />
									LIGHTSPEED wireless technology delivers a pro-grade 1 ms report rate, with no compromises on weight or battery life. The world’s top esports professionals choose LIGHTSPEED for its competition grade performance, responsiveness, and reliable connectivity. <br />
									HERO 16K is super-efficient, delivering incredible battery life that lasts up to 140 hours of gameplay with LIGHTSYNC RGB lighting in full effect — and up to 180 hours with no lighting. That’s almost 6X the battery life of the previous-generation G903. <br />
									Get ready for endless gameplay. The POWERPLAY wireless charging system keeps G903 and other compatible G mice charged while at rest and at play.* Just attach the included POWERCORE replacing the optional 10 g weight and cover. Never worry about battery life again. <br />
									Game-driven, full-spectrum RGB lighting responds to in-game action, audio, and screen color, synchronizing across G gear. Customize lighting animations and effects from ~16.8M colors using G HUB gaming software, and personalize to match your rig. <br />
									Metal-spring button tensioning keeps the primary left and right mouse buttons poised to trigger with less force. Get exceptional speed, responsiveness, and button consistency with every click. <br />
									The configurable button layout lets you adjust for left- or right-handed mousing. With the dual-mode hyper-fast tilt wheel and removable side buttons, you get access to 7-11 programmable functions. Logitech G HUB gaming software customizes the buttons, putting your power moves at your fingertips.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="31" data-name="Logitech G903 HERO" data-summary="summary 31" data-price="3490000" data-quantity="1" data-image="images/of40.png">Add to Cart</button>
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
												<img src="images/of41.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>ASUS ROG Gladius II Aura RGB</h3>
									<p class="in-para">Ergonomic optical Gaming mouse optimized for FPS featuring push-fit switch socket design, Aura RGB lighting with Aura Sync-support and DPI target button.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>2,300,000</del> 1,979,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Exclusive push-fit switch socket design to vary click resistance and extend the lifespan of the mouse. <br />
									Customizable Aura RGB lighting with Aura Sync-support. <br />
									DPI switch toggles sensitivity, while the DPI target button provides short instances of precision. <br />
									Omron switches with 50-million-click durability, plus two extra Japanese-made Omron switches for a different feel. <br />
									Advanced 12000 DPI optical sensor, 250 IPS, 50g acceleration and 1000Hz USB polling rate for fast and accurate tracking. <br />
									Detachable cable design and ROG pouch for convenient portability and storage. <br />
									Intuitive ROG Armoury interface for easy customization of button, performance and lighting settings. <br />
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="32" data-name="ASUS ROG Gladius II Aura RGB" data-summary="summary 32" data-price="1979000" data-quantity="1" data-image="images/of42.png">Add to Cart</button>
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
												<img src="images/of42.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>ASUS ROG Strix Fusion 500 Virtual 7.1</h3>
									<p class="in-para">ROG Strix Fusion 500 Gaming headset with headset-to-headset RGB light synchronization via mobile app control, hi-fi-grade ESS DAC and amplifier, and 7.1 virtual surround.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>5,000,000</del> 4,990,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									Hi-fi-grade ESS ES9018 DAC and SABRE9601K amp deliver realistic, unparalleled gaming audio. <br />
									Finely tuned ASUS Essence drivers and exclusive airtight chamber technology for an immersive audio experience. <br />
									Exclusive plug-and-play virtual 7.1 surround sound developed with Bongiovi Acoustics. <br />
									RGB light synchronization across headsets via Bluetooth, using a dedicated mobile app. <br />
									Headset touch controls for instant adjustments of volume, playback functions and RGB light synchronization. <br />
									Upgraded comfort and sound insulation with ROG Hybrid ear cushions. <br />
									Optimized digital microphone delivers clear communication. <br />
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="33" data-name="ASUS ROG Strix Fusion 500" data-summary="summary 33" data-price="4990000 " data-quantity="1" data-image="images/of42.png">Add to Cart</button>
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
												<img src="images/of43.png" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>KINGSTON HyperX Cloud II Grey Metal</h3>
									<p class="in-para">Award-winning comfort meets legendary durability.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>2,490,000</del> 2,090,000 VND</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
									The versatile Cloud headset family is designed to fit anyone’s gaming needs, no matter their system, play style or personal style. Whether you need virtual 7.1 surround sound for your PC domination station or stereo cans crafted for console life, there’s a Cloud made for you. Each Cloud model is designed to keep you on top of your game longer by providing award-winning comfort through its signature HyperX™ memory foam. 53mm drivers and closed ear cups team up to deliver total audio immersion and pump out precision sound. Built with a durable aluminum frame, every headset in the Cloud line is engineered to tank daily damage and keep coming back for more. Cloud’s detachable noise-cancelling mic transmits loud and clear, so your teamwork will always be on point.
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="34" data-name="KINGSTON HyperX Cloud II Grey Metal" data-summary="summary 34" data-price="2090000" data-quantity="1" data-image="images/of43.png">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
	

</body>
</html>