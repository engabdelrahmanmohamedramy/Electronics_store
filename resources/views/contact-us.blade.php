@extends('layout.all_user')
@section('content')

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">{{__('all.Home')}}</a></li>
					<li class="item-link"><span>{{__('all.Contact us')}}</span></li>
				</ul>
			</div>
			<div class="row">
				<div class=" main-content-area">
					<div class="wrap-contacts ">
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							@if(Session::has('message_sent'))
							     <div class="alert alert-success" role="alert">
							     	{{Session::get('message_sent')}}
							     </div>
							@endif

							<div class="contact-box contact-form">
								<h2 class="box-title">{{__('all.LEAVE A MESSAGE')}}</h2>
								<form action="{{route('contact.send')}}" method="POST" name="frm-contact">
									@csrf
									<label for="name">{{__('all.Name')}}<span>*</span></label>
									<input type="text" value="{{ old('name') }}" id="name" name="name" >

									<label for="email">{{__('all.Email')}}<span>*</span></label>
									<input type="email" value="{{ old('email') }}" id="email" name="email" >

									<label for="phone">{{__('all.Number Phone')}}</label>
									<input type="text" value="{{ old('phone') }}" id="phone" name="phone" >

									<label for="comment">{{__('all.Comment')}}</label>
									<textarea name="msg" id="comment"></textarea>

									<input type="submit" name="ok" value="{{__('all.Submit')}}" >
									<input type="reset" value="{{__('all.Reset')}}" class="btn btn-danger">

								</form>
							</div>
						</div>
						<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
							<div class="contact-box contact-info">
								<div class="wrap-map">
									<div class="mercado-google-maps">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221267.56802651714!2d30.74247970907457!3d29.941882879589937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145855e126df199d%3A0x24a6cf9d2fda5678!2s6th%20of%20October%20City%2C%20Giza%20Governorate!5e0!3m2!1sen!2seg!4v1606487995053!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
									</div>
								</div>
								<h2 class="box-title">{{__('all.Contact Detail')}}</h2>
								<div class="wrap-icon-box">

									<div class="icon-box-item">
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<div class="right-info">
											<b>{{__('all.Email')}}</b>
											<p>eng.abdelrahman.mohamed.ramy45@gmail.com</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div class="right-info">
											<b>{{__('all.Phone')}}</b>
											<p>+201024795414</p>
										</div>
									</div>

									<div class="icon-box-item">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
										<div class="right-info">
											<b>Mail Office</b>
											<p>Egypt - Giza - 6 October</p>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->
@endsection