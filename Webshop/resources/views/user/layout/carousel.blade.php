<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
       <a href="{{route('pccomponent')}}"> <img class="first-slide" src="img/banner/ba.jpg" alt="First slide"></a>
     
      </div>
      <div class="item">
       <a href="{{route('gaminggear')}}"> <img class="second-slide " src="img/banner/ba1.jpg" alt="Second slide"></a>
       
      </div>
      <div class="item">
        <a href="{{route('console')}}"><img class="third-slide " src="img/banner/ba2.jpg" alt="Third slide"></a>
        
      </div>
    </div>
  
  </div><!-- /.carousel -->