@extends('user.layout.main')
@section('content')
@include('user.layout.navbar')
@include('user.layout.carousel')

<!--content-->
<div class="kic-top ">
    <div class="container ">
        <div class="kic ">
            <h3>Top Selling</h3>

        </div>
        @foreach($dataTop as $key=>$val)
		<div class="col-md-4 kic-top1">
			<a href="{{route('single_pc')}}">
				<img src="{{asset($val['image'])}}" class="img-responsive" alt="" style="width: 200px">
			</a>
			<h6>{{$val['name']}}</h6>
			<p>{{$val['sale']}}</p>
		</div>
		@endforeach
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
            @foreach($data as $key=>$val)
					<div class="col-md-3 pro-1">
						<div class="col-m" style="height: 320px">
							<a href="#" data-toggle="modal" data-target="#model{{$val['id']}}" class="offer-img">
								<img src="{{asset($val['image'])}}" class="img-responsive" alt=""> 	
							</a>
							<div class="mid-1">
								<div class="women">
									<h6><a href="{{route('single')}}">{{$val['name']}}</a></h6>							
								</div>
								<div class="mid-2">
									<p ><label>{{$val['price']}}</label><em class="item_price">{{$val['sale']}}</em></p>
									  <div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="add">
								   <button class="btn btn-danger my-cart-btn my-cart-b " data-id="{{$val['id']}}" data-name="{{$val['name']}}" data-summary="summary 1" data-price="{{$val['sale']}}" data-quantity="1" data-image="{{$val['image']}}">Add to Cart</button>
								</div>
							</div>
						</div>
					</div>
							@endforeach

            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
@include('user.layout.detail_product')