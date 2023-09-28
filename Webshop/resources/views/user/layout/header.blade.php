<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.html"><b>V<br>N<br>U<br>A</b>VNUA Computer Store<span>Best Place For Building Your PC</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
				@guest
					<li><a href="{{route('login')}}" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="{{route('register')}}" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
				@else
					<li><a href="about.html" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a class="dropdown-item" href="{{ route('logout') }}"
							   onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
					</li>
				@endguest
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class=" active"><a href="index.html" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>PC Component<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Mainboard</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>CPU</a></li>
												<li><a href="pccomponent.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>RAM</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>GPU</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>SSD</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>HDD</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Power Supply</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>PC Case</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Fan/Liquid Cooling</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<!--<ul class="multi-column-dropdown">
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pickle & Condiment</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Instant Food</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Dry Fruit</a></li>
												<li><a href="pccomponent.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tea &amp; Coffee</a></li>
										
											</ul>-->
										</div>
										<div class="col-sm-3 w3l">
											<a href="pccomponent.html"><img src="images/me.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Gaming Gear<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Monitor</a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Keyboard</a></li>
												<!--<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Mouse </a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Headset </a></li>-->
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="gaminggear.html"> <i class="fa fa-angle-right" aria-hidden="true"></i>Mouse</a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Headset</a></li>
												<!--<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Personal Hygiene</a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>-->
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<!--<ul class="multi-column-dropdown">
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i> Fashion Accessories </a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Grooming Tools</a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Shaving Need</a></li>
												<li><a href="gaminggear.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Sanitary Needs</a></li>
										
											</ul>-->
										</div>
										<div class="col-sm-3 w3l">
											<a href="gaminggear.html"><img src="images/me1.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Console<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>SONY Play Station 4</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>PS4 Controller</a></li>
												<!--<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Detergents</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gardening Needs</a></li>-->
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Microsoft XBOX One</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>XBOX Controller</a></li>
												<!--<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pet Care</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Plastic Wear</a></li>-->
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<!--<ul class="multi-column-dropdown">
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pooja Needs</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Serveware</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Safety Accessories</a></li>
												<li><a href="console.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Festive Decoratives </a></li>
										
											</ul>-->
										</div>
										<div class="col-sm-3 w3l">
											<a href="console.html"><img src="images/me2.png" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<!--<li><a href="codes.html" class="hyper"> <span>Code</span></a></li>-->
							<li><a href="contact.html" class="hyper"><span>Contact Us</span></a></li>
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>