@extends('layout.all_admin')

@section('content')


<hr><hr>
<div class="CONTAINER">
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-6 col-lg-3 bg-info">
						<div class="statistic__item">
							    
								<h2 class="number">{{$users}}</h2>
								
								<span class="desc"><h3>Users</h3></span>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 bg-info">
						<div class="statistic__item">
                                
 								<h2 class="number">{{$admins}}</h2>
								
								<span class="desc"><h3>Admins</h3></span>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 bg-warning">
						<div class="statistic__item">
						        
								<h2 class="number">{{$categories}}</h2>
	
								<span class="desc"><h3>Categroies</h3></span>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 bg-success">
						<div class="statistic__item">
								<h2 class="number">{{$brands}}</h2>
								
								<span class="desc"><h3>Brands</h3></span>
						</div>
				</div>
				<div class="col-md-6 col-lg-3 bg-primary ">
						<div class="statistic__item">
								<h2 class="number">{{$products}}</h2>
								<span class="desc"><h3>Products</h3></span>
						</div>
				</div>
				
		</div>

</div>




<hr><hr>


@endsection