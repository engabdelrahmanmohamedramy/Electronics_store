
@extends('layout.all_admin')

@section('content')

<div class="container-fluid">
  <div class="row">
<div class="col-lg-6" id="Brand">
    <div class="card">
    	@if(isset($brand))
        	<div class="card-header"><h2>{{ __('all.Update Brand Form') }}</h2></div>
        @else
        	<div class="card-header"><h2>{{ __('all.Create Brand Form') }}</h2></div>
        @endif
        <div class="card-body card-block">
        	@if(isset($brand))
            	<form action="{{route('update_brand',$brand->id)}}" method="post" class="">
        	@else
				<form action="{{route('add_brand')}}" method="post" class="">
			@endif
            	@csrf
                <div class="form-group">
                    <div class="input-group">
                    	@if(isset($brand))
							<div class="input-group-addon">{{ __('all.Update Brand') }}</div>
						@else
							<div class="input-group-addon">{{ __('all.Create Brand') }}</div>
						@endif
						<input type="text" id="brand_name_english" name="brand_name_english" placeholder="{{ __('all.brand_name_english') }}" class="form-control" @if(isset($brand)) value="{{$brand->name_en}}" @endif>
						<input type="text" id="brand_name_arabic" name="brand_name_arabic" placeholder="{{ __('all.brand_name_arabic') }}" class="form-control"  @if(isset($brand)) value="{{$brand->name_ar}}" @endif>
						<div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-actions form-group">
                	@if(isset($brand))
                    	<button type="submit" class="btn btn-primary btn-sm">{{ __('all.Update') }}</button>
                	@else
						<button type="submit" class="btn btn-primary btn-sm">{{ __('all.Submit') }}</button>
					@endif
           <input type="reset" value="{{ __('all.Reset') }}" class="btn btn-danger">
                           </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>


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
							  <th>{{ __('all.Edit') }}</th>
							  <th>{{ __('all.delete') }}</th>
				  </tr>
				</thead>
				<tbody>
					  @foreach($brands as $brand)
					  <tr>
						  <td>{{$loop->iteration}}</td>
						  <td>{{$brand->name_en}}</td>
						  <td>{{$brand->name_ar}}</td>
						  <td><a href="{{route('edit_brand_page',$brand->id)}}" class="btn btn-info">{{ __('all.Edit') }}</a></td>
						  <td><a href="{{route('delete_brand',$brand->id)}}" class="btn btn-danger">{{ __('all.delete') }}</a></td>
					  </tr>
					  @endforeach


    			  </tbody>
			</table>
		</div>
          <!-- END DATA TABLE-->
      </div>
     </div>



<hr><hr>
@endsection
