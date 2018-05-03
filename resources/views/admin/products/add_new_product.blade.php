
@extends('admin.layouts.app')


@section('content')
		<div class="container">
			<h2>Adding new product</h2>
			{!! Form::open(['action'=>'Admin\AdminProductsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
   				 
				<div class="form-group">
					{{Form::label('name','Name of the product')}}
					{{Form::text('name','',['class'=>'form-control','placeholder' => 'Product name'])}}
				</div>

				<div class="form-group">
					{{Form::label('details','Details of product')}}
					{{Form::text('details','',['class'=>'form-control','placeholder' => 'Product details'])}}
				</div>

				<div class="form-group">
					{{Form::label('xmlrpc_parse_method_descriptions(xml)','Full description of product')}}
					{{Form::textarea('description','',['class'=>'form-control','placeholder' => 'Product description'])}}
				</div>

				<div class="form-group">
					{{Form::label('price','Price of product')}}
					{{Form::text('price','',['class'=>'form-control','placeholder' => 'Product price'])}}
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
					{{Form::file('product_image')}}
				</div>

				{{Form::submit('Add',['class' => 'btn btn-primary'])}}
			{!! Form::close() !!}
		</div>

@endsection