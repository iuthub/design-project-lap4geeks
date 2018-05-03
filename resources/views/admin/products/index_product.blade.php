@extends('admin.layouts.app')

@section('content')

	@if(count($products)>0)
		@foreach($products as $product)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img style="width:100%" src="/storage/product_images/{{$product->products_picture}}">						
					</div>

					<div class="col-md-8 col-sm-8">
					<h3><a href="/products/{{$product->id}}">{{$product->name}}</a></h3>
					</div>
				</div>
			</div>

		@endforeach
		{{$product->links()}}
	@else 

		<h1> No products found </h1>

	@endif

@endsection