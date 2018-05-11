
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
	   				{{--   <div class="col-md-12">
	   				 	<div class="col-md-6">
	   				 		<div class="form-contol">
							{{Form::label('name','')}}
							</div>
							{{Form::label('details','')}}
							</div>
							<div class="form-contol">
							{{Form::label('xmlrpc_parse_method_descriptions(xml)','')}}
							</div>
							<div class="form-contol">
							{{Form::label('price','')}}
							</div>
							<div class="form-contol">
							{{Form::label('category','')}}
							</div>
						</div>
					--}}
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
							
							<input type="file" name="product_image" onchange="showImage.call(this)">
							<div class="container-fluid">
								<img src="" id="image" style="display:none" height="150">
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
							{{Form::submit('Add New Product',['class' => 'btn btn-primary'])}}
							{!! Form::close() !!}
						</div>
							
						</div>
						</div>
					</div>
				</div>
		</div>
@endsection