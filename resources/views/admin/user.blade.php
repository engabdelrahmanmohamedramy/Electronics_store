@extends('layout.all_admin')

@section('content')
<div class="CONTAINER" id="users">
	<div class="container-fluid">
 		 <div class="row">
	   <div class="col-lg-6">
			<div class="card">
					<div class="card-header"><h2>{{ __('all.Create User') }}</h2></div>
					<div class="card-body card-block">
							<form action="" method="post" class="">
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-user"></i>
													</div>
													<input type="text" id="user_name_english" name="user_name_english" placeholder="{{ __('all.user_name_english') }}" class="form-control">
													<input type="text" id="user_name_arabic" name="user_name_arabic" placeholder="{{ __('all.user_name_arabic') }}" class="form-control">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-user"></i>
													</div>
													<select name="select" id="select" class="form-control">
														<option value="0">{{ __('all.user') }}</option>
														<option value="1">{{ __('all.Admin') }}</option>
												</select>
											</div>
										</div>
									
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-envelope"></i>
													</div>
													<input type="email" id="email" name="email" placeholder="{{ __('all.email') }}" class="form-control">
											</div>
									</div>
									<div class="form-group">
											<div class="input-group">
													<div class="input-group-addon">
															<i class="fa fa-asterisk"></i>
													</div>
													<input type="password" id="password" name="password" placeholder="Password" class="form-control">
											</div>
									</div>
									<div class="form-actions form-group">
											<button type="submit" class="btn btn-success btn-sm">{{ __('all.Submit') }}</button>
	                            <input type="reset" value="{{ __('all.Reset') }}" class="btn btn-danger">
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
															 <td>
																	 <span class="more">
																			 <i class="zmdi zmdi-more"></i>
																	 </span>
															 </td>
															 <td>
																<a href="edit_user.html"><input class="bg-success" type="button" value="{{ __('all.Edit') }}" name="Edit"/></a></td>
		 													<td><input class="bg-danger" type="button" value="{{ __('all.delete') }}" name="Delete"/></td>
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




