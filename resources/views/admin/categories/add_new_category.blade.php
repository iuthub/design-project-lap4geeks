@extends('admin.layouts.app')

@section('content')

	<div class="container">
		
		{!! Form::open(['action' => 'Admin\AdminCategoryController@store','method'=>'POST']) !!}
			<div class="form-group">
				{{Form::label('name','Name of new category')}}
				{{Form::text('name','',['class'=>'form-control','placeholder' => 'Category name'])}}
			</div>
   			
			<div class="form-group">
				{{Form::label('description','Description of new category')}}
				{{Form::textarea('description','',['class'=>'form-control','placeholder' => 'Description of new category'])}}
			</div>
			{{Form::submit('Add',['class' => 'btn btn-primary'])}}

		{!! Form::close() !!}

	</div>

@endsection