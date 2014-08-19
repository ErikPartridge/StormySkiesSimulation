@extends('templates/login')

@section('head-details')
	<meta name="description" content="Reset your TakeoffSim password">
@stop

@section('content')
	<div class="login">
	<h3>We'll send you a link to your email address with instructions on how to reset your password.</h3>
	{{Form::open(array('url' => '#', 'id' => 'forgotten'))}}
	{{Form::label('Email:')}}
	{{Form::email('Email', '', array())}}
	</div>
	<br><br>
	{{Form::submit('Submit', array('id' => 'button-submit'))}}
	<div class = "forgotten_password">
		{{HTML::link('/user/login', 'Login')}}
		<br><br>
		{{HTML::link('/user/register', 'Register')}}
	</div>
	<script>
		$('#forgotten').validate();
	</script>
@stop