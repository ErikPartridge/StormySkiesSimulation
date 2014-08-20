@extends('templates/login')

@section('head-details')
	<meta name="description" content="Your New Password for TakeoffSim">
@stop

@section('content')
	@if($error)
	<div class="login">
		<p>Whoops! Something went wrong. Please try again.</p>
	</div>
	@endif
	@if(!$error)

	@endif
@stop