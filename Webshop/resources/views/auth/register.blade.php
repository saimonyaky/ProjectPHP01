<!DOCTYPE html>
<html>

<head>
    <title>VNUA Computer Store</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="og:title" content="Vide" />
    <meta name="keywords"
        content="VNUA Store, Computer Store, VNUA Computer Store, Computer Shop, VNUA Computer Shop, VNUA Shop" />
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
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
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
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass(
                        'clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr(
                        'data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if (starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' ' + val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->

</head>

<body>
    <a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
    <div class="header">

        <div class="container">

            <div class="logo">
                <h1><a href="index.html"><b>V<br>N<br>U<br>A</b>VNUA Computer Store<span>Best Place For Building Your
                            PC</span></a></h1>
            </div>
            <div class="head-t">
                <ul class="card">
                    <li><a href="{{route('login')}}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                    <li><a href="{{route('register')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="login">
        <div class="main-agileits">
            <div class="form-w3agile form1">
                <h3>Register New Account</h3>
                <form action="{{route('register')}}" method="post">
					@csrf
					<div class="key">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="user name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="clearfix"></div>
                    </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="key">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" placeholder="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" class="@error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="key">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" placeholder="*****" name="password_confirmation">
                        <div class="clearfix"></div>
                    </div>
                    <input type="submit" value="Đăng kí">
                </form>
            </div>

        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-grid">
                <h3>About Us</h3>
                <p>VNUA Computer Store - Best place for buying Computer Components and Gaming Gears with a really low
                    price.</p>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="pccomponent.html">PC Component</a></li>
                    <li><a href="gaminggear.html">Gaming Gear</a></li>
                    <li><a href="console.html">Console</a></li>
                    <!-- <li><a href="codes.html">Short Codes</a></li> -->
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid ">
                <h3>Customer Services</h3>
                <ul>
                    <li><a href="shipping.html">Shipping</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="offer.html">Online Shopping</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h3>My Account</h3>
                <ul>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="footer-bottom">
                <h2><a href="index.html"><b>V<br>N<br>U<br>A</b>VNUA Computer Store<span>Best Place For Building Your
                            PC</span></a></h2>
                <p class="fo-para">VNUA Computer Store - Best place for buying Computer Components and Gaming Gears
                    with a really low price.</p>
                <ul class="social-fo">
                    <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                </ul>
                <div class=" address">
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-home" aria-hidden="true"></i>Trâu Qùy - Gia Lâm - Hà Nội.</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><i class="fa fa-phone" aria-hidden="true"></i>+1234 567 890</p>
                    </div>
                    <div class="col-md-4 fo-grid1">
                        <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i>vnua@vnua.edu.vn</a></p>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
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
            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
        </span></a>
    <!-- //smooth scrolling -->
    <!-- for bootstrap working -->
    <script src="js/bootstrap.js"></script>
    <!-- //for bootstrap working -->
    <script type='text/javascript' src="js/jquery.mycart.js"></script>
    <script type="text/javascript">
        $(function() {

            var goToCartIcon = function($addTocartBtn) {
                var $cartIcon = $(".my-cart-icon");
                var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>')
                    .css({
                        "position": "fixed",
                        "z-index": "999"
                    });
                $addTocartBtn.prepend($image);
                var position = $cartIcon.position();
                $image.animate({
                    top: position.top,
                    left: position.left
                }, 500, "linear", function() {
                    $image.remove();
                });
            }

            $('.my-cart-btn').myCart({
                classCartIcon: 'my-cart-icon',
                classCartBadge: 'my-cart-badge',
                affixCartIcon: true,
                checkoutCart: function(products) {
                    $.each(products, function() {
                        console.log(this);
                    });
                },
                clickOnAddToCart: function($addTocart) {
                    goToCartIcon($addTocart);
                },
                getDiscountPrice: function(products) {
                    var total = 0;
                    $.each(products, function() {
                        total += this.quantity * this.price;
                    });
                    return total * 1;
                }
            });

        });
    </script>

</body>

</html>
