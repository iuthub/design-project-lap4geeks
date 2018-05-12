@extends('admin.layouts.app')


@section('content')

	<div class="well">
		<div class="container-fluid " align="center">
 					<h2 id="header">Editing Category with id #{{ $category->id }}</h2>
			</div>	
		{!! Form::open(['action' => ['Admin\AdminCategoryController@update',$category->id],'method'=>'POST']) !!}
			<div class="form-group">
				
				{{Form::text('name',$category->name,['class'=>'form-control','placeholder' => 'Category name'])}}
			</div>
   			
			<div class="form-group">
				
				{{Form::textarea('description',$category->description,['class'=>'form-control','placeholder' => 'Description of new category'])}}
			</div>
			{{ Form::hidden('_method','PUT') }}
			{{Form::submit('Save changes',['class' => 'btn btn-primary'])}}

		{!! Form::close() !!}

	</div>

@endsection
