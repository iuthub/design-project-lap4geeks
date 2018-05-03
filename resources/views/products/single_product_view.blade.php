@extends('layouts.app')

@section('content')
	<div class="container">
			<img style="width:50%" src="/storage/product_images/{{$product->products_picture}}"></a>			
		<div class="well">
			<h2>{{$product->name}}</h2>
			<h3>{{$product->description}}</h3>
			<h4>Price:{{$product->price}} $</h3>
			<a href=""></a>
		</div>
	
	</div>

@endsection