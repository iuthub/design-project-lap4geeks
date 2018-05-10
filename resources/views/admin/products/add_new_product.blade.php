
@extends('admin.layouts.app')


@section('content')
		<div id="content">
			<div class="container-fluid " align="center">
 					<h2 id="header">Add Products</h2>
			</div>	
			<div class="content-inner">
				<div class="clearfix">
					<div class="container-fluid">
						
					{!! Form::open(['action'=>'Admin\AdminProductsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	   				 <div class="col-md-12">
	   				 	<div class="col-md-6">
							{{Form::label('name','Name of the product')}}
							{{Form::label('details','Details of product')}}
							{{Form::label('xmlrpc_parse_method_descriptions(xml)','Full description of product')}}
							{{Form::label('price','Price of product')}}
							{{Form::label('category','Category of product')}}
						</div>
					<div class="col-md-6">
						<div class="form-group">
						{{Form::text('name','',['class'=>'form-control','placeholder' => 'Product name'])}}
						</div>

						<div class="form-group">
						
						{{Form::text('details','',['class'=>'form-control','placeholder' => 'Product details'])}}
						</div>

						<div class="form-group">
						
						{{Form::textarea('description','',['class'=>'form-control','placeholder' => 'Product description'])}}
						</div>

						<div class="form-group">
						
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
						</div>
						{{Form::submit('Add New Product',['class' => 'btn btn-primary'])}}
					{!! Form::close() !!}
						</div>
						</div>
					</div>
				</div>
		</div>

@endsection