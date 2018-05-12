@extends('admin.layouts.app')


@section('content')
	

		<div class="col-md-10 display-table-cell col-sm-11 valign-top box">
		@if(count($products) > 0)
				@foreach($products as $product)

					<div class="well">
						<div class="row">
							
							<div class="col-md-4 col-sm-4 ">
								<img style="width:50%" src="/storage/product_images/{{$product->products_picture}}">
							</div>

							<div class="col-md-4 col-sm-4 ">
								<h3>{{$product->name}}</h3>
									<small>{{$product->details}}</small>
							</div>
							<div class="col-md-1 col-sm-1 ">
								<a href="/admin/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
							</div>
							<div class="col-md-1 col-sm-1 ">
								{!!Form::open(['action' => ['Admin\AdminProductsController@destroy',$product->id],'method' => 'POST','class' => 'pull-right'])!!}
									{{Form::hidden('_method','DELETE')}}
									{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
								{!!Form::close()!!}
							</div>
						</div>
					</div>
					<hr>
				@endforeach	
				{{$products->links()}}
		@else
			<div class="conainer-fluid">
				<h1>No products found !</h1>
			</div>

		@endif
	</div>

@endsection