@extends('admin.layouts.app')

@section('content')
<div class="well">
	@if(count($order_list) > 0 )

	@else
		<div class="container-fluid">
			<div class="container-fluid " align="center">
				<h1>No orders were found</h1> 
			</div>
		</div>

	@endif
</div>	
@endsection