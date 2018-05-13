@extends('admin.layouts.app')

@section('content')
<div class="well">
	@if(count($order_list) > 0 )

		@foreach($order_list as $order_lis)
			<div class="row">
				<div class="col-md-4 col-sm-4 ">
						{{ $order_lis->id }}
				</div>
				<div class="col-md-4 col-sm-4 ">
						{{ $order_lis->user_id }}
				</div>
			</div>
	@else
		<div class="container-fluid">
			<div class="container-fluid " align="center">
				<h1>No orders were found</h1> 
			</div>
		</div>

	@endif
</div>	
@endsection