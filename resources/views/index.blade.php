@extends('layout.all_user')
@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick-theme.css')}}">
@endsection
@section('content')
	<main id="main">
		<div class="container">

			<!--MAIN SLIDE-->
			<div class="wrap-main-slide">
				<div class="big-banner">
					<div class="item-slide">
						<img src="assets/images/main-slider-1-1.png" alt="Smart Phone" class="img-slide">
						<div class="slide-info slide-1">
							<h2 class="f-title">Smart Phone <b>Watches</b></h2>
							<span class="subtitle">You can buy smart phones, chargers, and smart watches.</span>
							<p class="sale-info">Only price: <span class="price">$59.99</span></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="assets/images/main-slider-1-3.png" alt="Smart Phone" class="img-slide">
						<div class="slide-info slide-3">
							<h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
							<span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
							<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
					<div class="item-slide">
						<img src="assets/images/main-slider-1-4.png" alt="Smart Phone" class="img-slide" width="20px">
						<div class="slide-info slide-3">
							<h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
							<span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
							<p class="sale-info">Stating at: <b class="price">$225.00</b></p>
							<a href="#" class="btn-link">Shop Now</a>
						</div>
					</div>
				</div>
			</div>

			<!--BANNER-->
			<div class="wrap-banner style-twin-default">
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/home-1-banner-1.jpg" alt="" width="580" height="190"></figure>
					</a>
				</div>
				<div class="banner-item">
					<a href="#" class="link-banner banner-effect-1">
						<figure><img src="assets/images/home-1-banner-2.jpg" alt="" width="580" height="190"></figure>
					</a>
				</div>
			</div>

			<!--On Sale-->
			<div class="wrap-show-advance-info-box style-1 has-countdown">
				<h3 class="title-box">On Sale</h3>
				<div class="wrap-countdown mercado-countdown" data-expire="2020/11/30 12:34:56"></div>
				<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

					<div class="product product-style-2 equal-elem ">
						<div class="product-thumnail">
							<a href="detail.html" title="Iphones product , Android products">
								<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
							</a>
							<div class="group-flash">
								<span class="flash-item bestseller-label">Bestseller</span>
							</div>
							<div class="wrap-btn">
								<a href="#" class="function-link">quick view</a>
							</div>
						</div>
						<div class="product-info text-center">
							<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
							<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
						</div>
						<div class="product-info text-center">
						<a href="#" class="btn btn-warning">Add To Cart</a>
						</div>
					</div>

				</div>
			</div>

			<!--Latest Products-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Latest Products</h3>
				<div class="wrap-top-banner">
					<a href="#" class="link-banner banner-effect-2">
						<!-- <figure><img src="assets/images/digital-electronic-banner.jpg" width="1170" height="240" alt=""></figure> -->
					</a>
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-contents">
							<div class="tab-content-item active" id="digital_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Product Categories-->
			<div class="wrap-show-advance-info-box style-1">
				<h3 class="title-box">Product Categories</h3>
				<div class="wrap-top-banner">
					<!-- <a href="#" class="link-banner banner-effect-2">
						<figure><img src="assets/images/iphon.png" width="1170" height="240" alt=""></figure>
					</a> -->
				</div>
				<div class="wrap-products">
					<div class="wrap-product-tab tab-style-1">
						<div class="tab-control">
							<a href="#fashion_1a" class="tab-control-item active">Smartphone</a>
							<a href="#fashion_1b" class="tab-control-item">Watch</a>
							<a href="#fashion_1d" class="tab-control-item">Tablet</a>
						</div>
						<div class="tab-contents">

							<div class="tab-content-item active" id="fashion_1a">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="text-center"><span class="product-price"><h3>$250.00</h3></span></div>
										</div>
										<div class="product-info text-center">
										<a href="#" class="btn btn-warning">Add To Cart</a>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1b">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1c">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>

							<div class="tab-content-item" id="fashion_1d">
								<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

									<div class="product product-style-2 equal-elem ">
										<div class="product-thumnail">
											<a href="detail.html" title="Iphones product , Android products">
												<figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="Iphones product , Android products"></figure>
											</a>
											<div class="group-flash">
												<span class="flash-item bestseller-label">Bestseller</span>
											</div>
											<div class="wrap-btn">
												<a href="#" class="function-link">quick view</a>
											</div>
										</div>
										<div class="product-info">
											<a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
											<div class="wrap-price"><span class="product-price">$250.00</span></div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</main>
@endsection

@section('js')
	<script src="{{asset('assets/js/slick.min.js')}}"></script>
	<script src="{{asset('assets/js/script.js')}}"></script>
@endsection