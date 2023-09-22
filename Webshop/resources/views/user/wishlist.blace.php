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
  <!----header-->
  <!---->

   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Your Wishlist</h3>
		<h4><a href="index.html">Home</a><label>/</label>Wishlist</h4>
		<div class="clearfix"> </div>
	</div>
</div>

	<!-- contact -->
		<div class="check-out">	 
		<div class="container">	 
	 <!--<div class="spec ">
				<h3>Wishlist</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>-->
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cross').fadeOut('slow', function(c){
							$('.cross').remove();
						});
						});	  
					});
			   </script>
			<script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cross1').fadeOut('slow', function(c){
							$('.cross1').remove();
						});
						});	  
					});
			   </script>	
			   <script>$(document).ready(function(c) {
					$('.close3').on('click', function(c){
						$('.cross2').fadeOut('slow', function(c){
							$('.cross2').remove();
						});
						});	  
					});
			   </script>	
 <table class="table ">
		  <tr>
			<th class="t-head head-it ">Products</th>
			<th class="t-head">Price</th>
		<th class="t-head">Quantity</th>

			<th class="t-head">Purchase</th>
		  </tr>
		  <tr class="cross">
			<td class="ring-in t-data">
				<a href="single.html" class="at-in">
					<img src="images/wi.png" class="img-responsive" alt="">
				</a>
			<div class="sed">
				<h5>Intel Core i7 9700K</h5>
			</div>
				<div class="clearfix"> </div>
				<div class="close1"> <i class="fa fa-times" aria-hidden="true"></i></div>
			 </td>
			<td class="t-data">9,890,000 VND</td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
			
			</td>

			<td class="t-data t-w3l"><button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Intel Core i7 9700K" data-summary="summary 2" data-price="9890000" data-quantity="1" data-image="images/of1.png">Add to Cart</button></td>
			
		  </tr>
		  <tr class="cross1">
		  <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="images/wi1.png" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>MSI RTX 2080TI Gaming X Trio </h5>
			</div>
			<div class="clearfix"> </div>
							<div class="close2"> <i class="fa fa-times" aria-hidden="true"></i></div>
</td>
			<td class="t-data">33,990,000 VND</td>
		<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
			
			</td>

			<td class="t-data t-w3l"><button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="MSI RTX 2080TI Gaming X Trio" data-summary="summary 6" data-price="33990000" data-quantity="1" data-image="images/of5.png">Add to Cart</button></td>
			
		  </tr>
		  <tr class="cross2">
		  <td class="t-data ring-in"><a href="single.html" class="at-in"><img src="images/wi2.png" class="img-responsive" alt=""></a>
			<div class="sed">
				<h5>ROG Strix PG27UQ</h5>
			</div>
			<div class="clearfix"> </div>
				<div class="close3"> <i class="fa fa-times" aria-hidden="true"></i></div>
			</td>
			<td class="t-data">69,990,000 VND</td>
			<td class="t-data"><div class="quantity"> 
								<div class="quantity-select">            
									<div class="entry value-minus">&nbsp;</div>
										<div class="entry value"><span class="span-1">1</span></div>									
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
			
			</td>

			<td class="t-data"><button class="btn btn-danger my-cart-btn my-cart-b" data-id="9" data-name="ASUS ROG Strix PG27UQ" data-summary="summary 9" data-price="69990000" data-quantity="1" data-image="images/of8.png">Add to Cart</button></td>
			
		  </tr>
	</table>
		 </div>
		 </div>
		 				
	<!--quantity-->
			<script>
			$('.value-plus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function(){
				var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
				if(newVal>=1) divUpd.text(newVal);
			});
			</script>
			<!--quantity-->
			

<!--footer-->
@include('user.layout.footer')
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
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

</body>
</html>