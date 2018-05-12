
@extends('admin.layouts.app')


@section('content')
<div class="well">
			<div class="container-fluid " align="center">
 					<h2 id="header">Add Products</h2>
			</div>	

			<div class="content-inner">
				<div class="clearfix">
					<div class="container-fluid">
						
					{!! Form::open(['action'=>'Admin\AdminProductsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
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
						
						<select name="category_name" class="f" placeholder="Category">
							 <option value="" disabled selected>Select category</option>
							@foreach($categories as $category)
								<option>{{$category->name}}</option>
							@endforeach
						</select>
						</div>

						<div class="form-group">
							
							<input type="file" name="product_image" onchange="showImage.call(this)">
							<div class="container-fluid">
								<div class="col-md-12 col-sm-12">
									<img src="" id="image" style="display:none" height="300">
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
							{{Form::submit('Add New Product',['class' => 'btn btn-primary'])}}
							{!! Form::close() !!}
						</div>
							
						</div>
						</div>
					</div>
				</div>
		</div>
@endsection