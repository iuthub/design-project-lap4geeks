@extends('admin.layouts.app')

@section('content')
	
	@if(count($users)>0)
		<div class="col-md-10 display-table-cell col-sm-11 valign-top box">
			<div id="content">

				<header class="clearfix">
						<div class="col-xs-4 col-sm-3 col-md-3">
							<b>All users</b>
						</div>
				</header>
				<div class="content-inner">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#Id</th>
									<th>Name</th>	
									<th>Email</th>
									<th>Created Time</th>
								</tr>
							</thead>
						<tbody>
					@foreach($users as $user)
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->created_at}}</td>
					@endforeach
					</tbody>
				</table>
			</div>
				{{$users->links()}}
			</div>
		</div>
	@else
		<div class="container">
			<div class="row">
				Thera are no users for now !
			</div>
		</div>
	@endif
	
@endsection