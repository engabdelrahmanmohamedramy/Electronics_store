@extends('layout.all_admin')

@section('content')

<div class="CONTAINER" id="users">
	<div class="container-fluid">
 		 <div class="row">
	   <div class="col-lg-6">
			<div class="card">
					<div class="card-header"><h2>Update User</h2></div>
					<div class="card-body card-block">
						@if(url()->current()==  route('edit_admin_page',$user->id))
              <form action="{{route('update_admin',$user->id)}}" method="post" class="">
          @elseif(url()->current()==  route('edit_user_page',$user->id))
        <form action="{{route('update_user',$user->id)}}" method="post" class="">
      @endif
							
				              @csrf
									<div class="form-group">
											<div class="input-group">
										              <div class="input-group-addon"><i class="fa fa-user"></i>  {{ __('all.name') }} 		
										              </div>

													<input type="text" id="user_name_english" name="user_name_english" placeholder="{{ __('all.user_name_english') }}" class="form-control" value="{{$user->name_en}}">
													<input type="text" id="user_name_arabic" name="user_name_arabic" placeholder="{{ __('all.user_name_arabic') }}" class="form-control" value="{{$user->name_ar}}" >
											</div>
									</div>
										</div>
									
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-envelope"></i>
													</div>
													<input type="email" id="email" name="email" placeholder="{{ __('all.email') }}" class="form-control"value="{{$user->email}}">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="password_confirmation" placeholder="Password" class="form-control"  value="{{$user->password}}">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="confirm" placeholder="confirm" class="form-control"  value="{{$user->password}}">
											</div>
									</div>
									<div class="form-actions form-group">
					            <button type="submit" class="btn btn-primary btn-sm">{{ __('all.Update') }}</button>
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