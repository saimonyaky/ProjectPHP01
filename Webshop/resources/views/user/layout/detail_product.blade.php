@foreach($data as $key => $val)
			<div class="modal fade" id="model{{$val['id']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="{{asset($val['image'])}}" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3>{{$val['name']}}| 24 Cores - 32 Threads</h3>
									<p class="in-para">36M Cache, up to 6.00 GHz.</p>
									<div class="price_single">
									  <span class="reducedfrom "><del>{{$val['price']}}</del> {{$val['sale']}}</span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc">
										{{$val['name']}}<br>
									</p>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="{{$val['id']}}" data-name="{{$val['name']}}" data-summary="summary 1" data-price="{{$val['sale']}}" data-quantity="1" data-image="{{$val['image']}}">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
@endforeach