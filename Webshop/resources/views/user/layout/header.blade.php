<a href="offer.html"><img src="images/download.png" class="img-head" alt=""></a>
<div class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="index.html"><b>V<br>N<br>U<br>A</b>VNUA Computer Store<span>Best Place For Building Your
                        PC</span></a></h1>
        </div>
        <div class="head-t">
            <ul class="card">
                @guest
                    <li><a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
                    <li><a href="{{ route('register') }}"><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a>
                    </li>
                @else
                    <li><a href="about.html"><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
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
                <li><a href="#" class="icon facebook"><i class="fa fa-facebook"
                            aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon twitter"><i class="fa fa-twitter"
                            aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p"
                            aria-hidden="true"></i><span></span></a></li>
                <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble"
                            aria-hidden="true"></i><span></span></a></li>
            </ul>
        </div>
    </div>
</div>
