@extends('layout.all_admin')

@section('content')
<div class="CONTAINER" id="users">
	<div class="container-fluid">
 		 <div class="row">
	   <div class="col-lg-6">
			<div class="card">
					<div class="card-header"><h2>{{ __('all.Create User') }}</h2></div>
				<div class="card-body card-block">
				        @if(url()->current()==  route('admins'))
              <form action="{{route('add_admin')}}" method="post" class="">
          @elseif(url()->current()==  route('users'))
        <form action="{{route('add_user')}}" method="post" class="">
      @endif
				              @csrf
									<div class="form-group">
											<div class="input-group">
										              <div class="input-group-addon"><i class="fa fa-user"></i>  {{ __('all.name') }} 		
										              </div>

													<input type="text" id="user_name_english" name="user_name_english" placeholder="{{ __('all.user_name_english') }}" class="form-control" value="{{ old('user_name_english') }}">
													<input type="text" id="user_name_arabic" name="user_name_arabic" placeholder="{{ __('all.user_name_arabic') }}" class="form-control" value="{{ old('user_name_arabic') }}" >
											</div>
									</div>
										</div>
									
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-envelope"></i>
													</div>
													<input type="email" id="email" name="email" placeholder="{{ __('all.email') }}" class="form-control"value="{{ old('email') }}">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="password_confirmation" placeholder="Password" class="form-control"  value="{{ old('password') }}">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="confirm" placeholder="confirm" class="form-control"  value="{{ old('password') }}">
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
		 <div class="row">
			 <div class="col-lg-12">
					 <!-- USER DATA-->
					 <div class="user-data m-b-30">
							 <h3 class="title-3 m-b-30">
									 <i class="zmdi zmdi-account-calendar"></i>{{ __('all.user data') }}</h3>

							 <div class="table-responsive table-data">
									 <table class="table">
											 <thead>
													 <tr>
															
															 <td>#</td>
															 <td>{{ __('all.name') }}</td>
															 <td>{{ __('all.email') }}</td>
															 <td>{{ __('all.role') }}</td>
															 <td></td>
															 <th>{{ __('all.Edit') }}</th>
							                                 <th>{{ __('all.delete') }}</th>
													 </tr>
											 </thead>
											 <tbody>
											 		@foreach($users as $user)
													 <tr>
															 
															 <td>
																 {{$loop->iteration}}
															 </td>
															 <td>
																	 <div class="table-data__info">
																			 <h6>{{$user->name_en}}</h6>
																			
																	 </div>
															 </td>
															 <td>
																	 <div class="table-data__info">
																			 <h6>{{$user->email}}</h6>
																			
																	 </div>
															 </td>
															 
															 <td>
																	 <div class="table-data__info">
																	 		@if($user->role == 0)
																				<h6>{{ __('all.user') }}</h6>
																			@elseif($user->role == 1)
																				<h6>{{ __('all.admin') }}</h6>
																			@endif
																	 </div>
															 </td>
															 <td></td>
															 <td>

															 	<a href="{{route('edit_user_page',$user->id)}}" class="btn btn-info ">{{ __('all.Edit') }}</a></td>
                                                             <td><a href="{{route('delete_user',$user->id)}}" class="btn btn-danger delete">{{ __('all.delete') }}</a></td>
													 </tr>
													 @endforeach


											 </tbody>
									 </table>
							 </div>

					 </div>
					 <!-- END USER DATA-->
			 </div>
		 </div>
	</div>
</div>



<hr><hr>
@endsection




