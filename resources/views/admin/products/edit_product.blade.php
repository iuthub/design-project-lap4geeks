@extends('admin.layouts.app')

@section('content')

		<div class="well">
			{{--<div class="row">
				<div class="col-md-5 col-sm-4 ">
					<img src="/storage/product_images/{{$product->products_picture}}" style="width:100%">
				</div>
				<div class="col-md-7 col-sm-7">
					<h3> {{$product->name}} </h3>
				</div>
			</div>--}}
			<h2>Editing Product with id {{ $product->id }}</h2>
			{!! Form::open(['action'=>['Admin\AdminProductsController@update',$product->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   				 
				<div class="form-group">
					{{Form::label('name','Name of the product')}}
					{{Form::text('name',$product->name,['class'=>'form-control','placeholder' => 'Product name'])}}
				</div>

				<div class="form-group">
					{{Form::label('details','Details of product')}}
					{{Form::text('details',$product->details,['class'=>'form-control','placeholder' => 'Product details'])}}
				</div>

				<div class="form-group">
					{{Form::label('xmlrpc_parse_method_descriptions(xml)','Full description of product')}}
					{{Form::textarea('description',$product->description,['class'=>'form-control','placeholder' => 'Product description'])}}
				</div>

				<div class="form-group">
					{{Form::label('price','Price of product')}}
					{{Form::text('price',$product->price,['class'=>'form-control','placeholder' => 'Product price'])}}
				</div>

				<div class="form-group">
					{{--{{Form::label('category','Category of product')}}
					{{Form::select('category',$categories,'',['class'=>'form-control'])}}--}}
					<select name="category_name" class="f">
						@foreach($categories as $category)
							<option>{{$category->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<input type="file" value="{{$product->products_picture}}" name="product_image" onchange="showImage.call(this)">
							<div class="container-fluid">
								<div class="col-md-12 col-sm-12">
									<img src="/storage/product_images/{{$product->products_picture}}" id="image" style="" height="300">
								</div>

								<script type="text/javascript">
									function showImage() {
										if(this.files && this.files[0]){
											var obj = new FileReader();
											obj.onload = function(data){
												var image = document.getElementById('image');
												image.src = data.target.result;
												image.style.display = "block";
											}
											obj.readAsDataURL(this.files[0]);
										}
										
									}
								</script>
							</div>
				</div>
				{{Form::hidden('_method','put')}}
				{{Form::submit('Save changes',['class' => 'btn btn-primary'])}}
			{!! Form::close() !!}


		</div>

@endsection