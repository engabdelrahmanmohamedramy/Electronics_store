
@extends('layout.all_user')
@section('content')
	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{route('index')}}" class="link">home</a></li>
					<li class="item-link"><span>favourite</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
						@foreach($favourites as $favourite)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src="{{asset($favourite->product->main_image)}}" alt=""></figure>
							</div>
							<div class="product-name">
								<a class="link-to-product" href="#">{{$favourite->product->name_en}}</a>
							</div>
							<div class="price-field produtc-price"><p class="price">{{$favourite->product->price}}</p></div>
						</li>
						@endforeach

					</ul>
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->
@endsection