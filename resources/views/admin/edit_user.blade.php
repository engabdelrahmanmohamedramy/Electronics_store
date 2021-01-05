@extends('layout.all_admin')

@section('content')

<div class="CONTAINER" id="users">
	<div class="container-fluid">
 		 <div class="row">
	   <div class="col-lg-6">
			<div class="card">
					<div class="card-header"><h2>Update User</h2></div>
					<div class="card-body card-block">
						@if(url()->current()==  route('admins'))
              <form action="{{route('update_admin')}}" method="post" class="">
          @elseif(url()->current()==  route('users'))
        <form action="{{route('update_user')}}" method="post" class="">
      @endif
							
				              @csrf
									<div class="form-group">
											<div class="input-group">
										              <div class="input-group-addon"><i class="fa fa-user"></i>  {{ __('all.name') }} 		
										              </div>

													<input type="text" id="user_name_english" name="user_name_english" placeholder="{{ __('all.user_name_english') }}" class="form-control" value="{{$brand->name_en}}">
													<input type="text" id="user_name_arabic" name="user_name_arabic" placeholder="{{ __('all.user_name_arabic') }}" class="form-control" value="{{$brand->name_ar}}" >
											</div>
									</div>
										</div>
									
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-envelope"></i>
													</div>
													<input type="email" id="email" name="email" placeholder="{{ __('all.email') }}" class="form-control"value="{{$brand->email}}">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="password_confirmation" placeholder="Password" class="form-control"  value="{{$brand->password}}">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="confirm" placeholder="confirm" class="form-control"  value="{{$brand->password}}">
											</div>
									</div>
									<div class="form-actions form-group">
					            <button type="submit" class="btn btn-primary btn-sm">{{ __('all.Submit') }}</button>
					                </div>
							</form>
					</div>
			</div>
	</div>
     </div>
     </div>
     </div>
     </div>
     		 

<hr><hr>


@endsection