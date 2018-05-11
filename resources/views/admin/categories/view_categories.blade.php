@extends('admin.layouts.app')

@section('content')

	@if(count(categories) > 0 )
		@foreach($categories as category)
		<div class="well">
			<div class="row">
				<div class="col-md-4 col-sm-4 ">
					<h3><a href="/admin/categories/{{$category->id}}">{{$category->name}}</a></h3>
					<small>{{$category->description}}</small>
				</div>
				<div class="col-md-1 col-sm-1">
				<a href="/admin/categories/{{$category->id}}/edit" class="btn btn-primary">Edit</a>
				</div>
				<div class="col-md-1 col-sm-1 ">
					{!!Form::open(['action' => ['Admin\AdminCategoryController@destroy',$category->id],'method' => 'POST','class' => 'pull-right'])!!}
					{{Form::hidden('_method','DELETE')}}
					{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
					{!!Form::close()!!}
				</div>
			</div>
		</div>
		<hr>
		@endforeach	
		{{$categories->links()}}
		
	@endif

@endsection