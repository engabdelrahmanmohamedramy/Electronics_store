
@extends('layout.all_user')
@section('content')
	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{route('index')}}" class="link">{{__('all.home')}}</a></li>
					<li class="item-link"><span>{{__('all.cart')}}</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">{{__('all.products')}}</h3>
					<ul class="products-cart">
						@foreach($carts as $cart)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{asset($cart->product->main_image)}}" alt=""></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="#">{{$cart->product->name_en}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">{{$cart->product->price}}</p></div>
							<div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="{{$cart->quantity}}" data-max="120" pattern="[0-9]*" >
									<a class="btn btn-increase" href="#"></a>
									<a class="btn btn-reduce" href="#"></a>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">{{$cart->product->price * $cart->quantity}}</p></div>
							<div class="delete">
								<a href="#" class="btn btn-delete" title="">
									<span>Delete from your cart</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>
						@endforeach

					</ul>
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">{{__('all.ORDER SUMMARY')}}</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">{{$total_price}}</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">100</b></p>
						<p class="summary-info total-info "><span class="title">{{__('all.Total')}}</span><b class="index">{{$total_price + 100}}</b></p>
					</div>
					<div class="checkout-info">
						<a class="btn btn-checkout" href="{{route('checkout')}}">{{__('all.CHECKOUT')}}</a>
						<a class="link-to-shop" href="{{route('shop')}}">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
@endsection