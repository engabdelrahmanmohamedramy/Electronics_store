@extends('layout.all_user')
@section('content')

	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="#" class="link">{{__('all.home')}}</a></li>
					<li class="item-link"><span>{{__('all.CHECKOUT')}}</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">{{__('all.BILLING ADDRESS')}}</h3>
					<form action="{{route('add_bill')}}" method="post" name="frm-billing">
						@csrf
						<p class="row-in-form">
							<label for="add">{{__('all.Address:')}}</label>
							<input id="add" type="text" name="add" value="" placeholder="Street at apartment number">
						</p>
						<p class="row-in-form">
							<label for="zip-code">{{__('all.Payment Details:')}}</label>
							<input id="zip-code" type="text" name="Payment_Details" value="" placeholder="Payment Details">
						</p>
						<p class="row-in-form">
								<input name="different-add" id="different-add" value="{{__('all.Submit')}}" type="submit">
							</label>
						</p>
					</form>
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
	<!--main area-->

@endsection