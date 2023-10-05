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
			<a href="{{route('single',$val->id)}}">
				<img src="{{asset($val['image'])}}" class="img-responsive" alt="" style="width: 200px">
			</a>
			<h6>{{$val['name']}} | {{$val['summary']}}</h6>
			<p>@if($val['sale'] > 0){{ $val['sale'] }}@else{{$val['price']}}@endif VND</p>
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
									<h6><a href="{{route('single',$val->id)}}">{{$val['name']}}</a></h6>							
								</div>
								<div class="mid-2">
									<p >@if ($val['sale'] != 0)
										<label>{{ $val['price'] }}</label>
									@endif
									<em class="item_price">
										@if ($val['sale'] == 0)
											{{ $val['price'] }}
										@else
											{{ $val['sale'] }}
										@endif
										VND
									</em></p>
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