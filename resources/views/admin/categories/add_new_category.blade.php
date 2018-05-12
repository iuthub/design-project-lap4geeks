@extends('admin.layouts.app')

@section('content')

	<div id="content">
		<div class="container-fluid " align="center">
 					<h2 id="header">Add New Category</h2>
			</div>	
		{!! Form::open(['action' => 'Admin\AdminCategoryController@store','method'=>'POST']) !!}
			<div class="form-group">
				
				{{Form::text('name','',['class'=>'form-control','placeholder' => 'Category name'])}}
			</div>
   			
			<div class="form-group">
				
				{{Form::textarea('description','',['class'=>'form-control','placeholder' => 'Description of new category'])}}
			</div>
			{{Form::submit('Add',['class' => 'btn btn-primary'])}}

		{!! Form::close() !!}

	</div>

@endsection