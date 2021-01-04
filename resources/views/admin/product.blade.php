@extends('layout.all_admin')

@section('content')
<div class="CONTAINER" id="products">
	<div class="container-fluid">
		 <div class="row">
			 <div class="col-lg-12">
					 <div class="card">
							 <div class="card-header">
									 <strong><h2>{{ __('all.Create Product') }}</h2></strong>
							 </div>
							 <form action="{{route('add_product')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
							 	@csrf
							 	<div class="card-body card-block">
									
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="Name Product" class=" form-control-label">{{ __('all.Name Product') }}</label>
													 </div>
													 <div class="col-12 col-md-9">
														 <input type="text" id="product_name_english" name="product_name_english" placeholder="{{ __('all.product_name_english') }}" class="form-control">
														<input type="text" id="product_name_arabic" name="product_name_arabic" placeholder="{{ __('all.product_name_arabic') }}" class="form-control">
													</div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="price" class=" form-control-label">{{ __('all.price') }}</label>
													 </div>

													 <div class="col-12 col-md-9">
														<input type="number" id="price" name="price" placeholder="{{ __('all.price') }}" class="form-control">
											 		</div>
											</div>
											 <div class="row form-group">
												<div class="col col-md-3">
														<label for="Quantity" class="form-control-label">{{ __('all.Quantity') }}</label>
												</div>
												<div class="col-12 col-md-9">
													<input type="number" id="Quantity" name="Quantity" placeholder="{{ __('all.Quantity') }}" class="form-control">
                                                </div>
											  </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="textarea-input" class=" form-control-label">{{ __('all.Description') }}</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <textarea name="description_en" id="textarea-input" rows="9" placeholder="{{ __('all.description_english') }}" class="form-control"></textarea>
															 <textarea name="description_ar" id="textarea-input" rows="9" placeholder="{{ __('all.description_arabic') }}" class="form-control"></textarea>
											  </div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="select" class=" form-control-label">{{ __('all.Category') }}</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <select name="category" class="form-control">
															 		@foreach($categories as $category)
																	 <option value="{{$category->id}}">{{$category->name_en}}</option>
																	 @endforeach

															 </select>
													 </div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="select" class=" form-control-label">{{ __('all.Brand') }}</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <select name="brand" class="form-control">
																	 @foreach($brands as $brand)
																	 <option value="{{$brand->id}}">{{$brand->name_en}}</option>
																	 @endforeach
															 </select>
													 </div>
											 </div>
											 <div class="row form-group">
												<div class="col col-md-3">
														 <label for="size" class=" form-control-label">{{ __('all.Size') }}</label>
												 </div>

												 <div class="col-12 col-md-9">
													<input type="number" name="size" placeholder="{{ __('all.screen_size') }}" class="form-control">
										 		</div>
											</div>
												<div class="row form-group">
													<div class="col col-md-3">
															<label for="select" class=" form-control-label">{{ __('all.color') }}</label>
													</div>
													<div class="col-12 col-md-9">
														<select name="color[]"  class="form-control" multiple>
															@foreach($colors as $color)
															 	<option value="{{$color->id}}">{{$color->name_en}}</option>
															@endforeach
														</select>
												</div>
										</div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="file-input" class=" form-control-label">{{ __('all.picture') }}</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <input type="file" id="file-input" name="main_image" class="form-control-file">
													 </div>
											 </div>
											 <div class="row form-group">
													 <div class="col col-md-3">
															 <label for="file-multiple-input" class=" form-control-label">{{ __('all.Another Pictures') }}</label>
													 </div>
													 <div class="col-12 col-md-9">
															 <input type="file"  name="multiple_images[]" multiple="" class="form-control-file">
													 </div>
											 </div>
									 
							 	</div>
								 <div class="card-footer">
										 <button type="submit" class="btn btn-primary btn-sm">
												  {{ __('all.Submit') }}
										 </button>
										   <input type="reset" value="{{ __('all.Reset') }}" class="btn btn-danger">
								 </div>
							 </form>
					 </div>
			 </div>
		 </div>
		 <hr>
<div class="row">
			 <div class="col-lg-12">
					 <!-- DATA TABLE-->
					 <div class="table-responsive m-b-40">
               <table class="table table-borderless table-data3">
                   <thead>
                       <tr>
						
						   <th>#</th>
						   <th>{{ __('all.Name in English') }}</th>
						   <th>{{ __('all.Name in Arabic') }}</th>
                           <th>{{ __('all.Category') }}</th>
						   <th>{{ __('all.Brand') }}</th>
						   <th>{{ __('all.Quantity') }}</th>
                           <th>{{ __('all.description in English') }}</th>
						   <th>{{ __('all.Size') }}</th>
						   <th>{{ __('all.color') }}</th>
                           <th>{{ __('all.price') }}</th>
						   <th>{{ __('all.image') }}</th>
 						   <th>{{ __('all.Edit') }}</th>
						   <th>{{ __('all.delete') }}</th>
							 
                       </tr>
                   </thead>
                   <tbody>
                       
                       @foreach($products as $product)
                       <tr>
						
						   <td>{{$loop->iteration}}</td>
                           <td>{{$product->name_en}}</td>
                           <td>{{$product->name_ar}}</td>
						   <td>{{$product->category->name_en}}</td>
						   <td>{{$product->brand->name_en}}</td>
						   <td>{{$product->quantity}}</td>
						   <td>{{$product->description_en}}</td>
						   <td>{{$product->screen_size}}</td>

						   <td>
						   		@foreach($product->product_colors as $color)
						   			{{$color->color->name_en}}
						   		@endforeach
						   	</td>
                           <td>{{$product->price}}</td>
							<td><img src="{{asset($product->main_image)}}" alt="product1" height="100" width="100"></td>
 							<td><a href="{{route('edit_product_page',$product->id)}}" class="btn btn-info">{{ __('all.Edit') }}</a></td>
 						  	<td><a href="{{route('delete_product',$product->id)}}" class="btn btn-danger">{{ __('all.delete') }}</a></td>
                       </tr>
                        @endforeach 	                   
                   </tbody>
               </table>
           </div>
					 <!-- END DATA TABLE-->
			 </div>
     </div>
  </div>
</div>



<hr><hr>
@endsection

