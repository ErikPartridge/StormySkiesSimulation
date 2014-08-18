@extends('templates/login')

@section('head-details')
<meta name="description" content="Log in to Takeoff Simulation">
@stop

@section('content')
	@if(Session::has('failed'))
		<div class = "failed">
			Sorry, that username/password was not found.
		</div>
	@endif
	{{Form::open(array('url' => '/user/login', 'id' => 'login'))}}
    	<div class = "login">
			{{Form::label('register', 'Log In', array('style' => 'color:deepskyblue'))}}<br>
			{{Form::label('email', 'Email:')}}
			{{Form::email('email')}} <br>
			{{Form::label('password', 'Password:')}}
			{{Form::password('password')}} <br>
			{{Form::label('remember', 'Remember Me?')}}
			{{Form::checkbox('remember', 'remember', true)}}
		</div>
		<br><br>
			{{Form::submit('Log In', array('id' => 'button-submit'))}}
			<br><br>
			<div class = "forgotten_password">
				{{HTML::link('/user/forgot', 'Forgot your password?')}}
				<br><br>
				{{HTML::link('/user/register', 'Register')}}
			</div>
	{{Form::close()}}
	<script>
		$('#login').validate();
	</script>
@stop