@extends('templates/login')

@section('head-details')
	<meta name="description" content="Your New Password for TakeoffSim">
@stop

@section('content')
	@if($error)
	<div class="login">
		<p>Whoops! Something went wrong. Please try again. {{HTML::link('user/forgot', 'Reset Password.', array())}}</p>
	</div>
	@endif
	@if(!$error)
	<div class="login">
		<p>Your password has been reset to: {{$code}} , you may now {{HTML::link('/user/login', 'login', array())}}.
	</div>
	@endif
@stop