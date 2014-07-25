@extends('templates/login')

@section('head-details')
<meta name="description" content="Log in to Takeoff Simulation">
@stop

@section('content')
	{{Form::open(array('url' => '/user/login'))}}
    	<div class = "login">
			{{Form::label('register', 'Log In', array('style' => 'color:deepskyblue'))}}<br>
			{{Form::label('email', 'Email:')}}
			{{Form::text('email')}} <br>
			{{Form::label('password', 'Password:')}}
			{{Form::password('password')}} <br>
		</div>
		<br><br>
			{{Form::submit('Log In', array('id' => 'button-submit'))}}
	{{Form::close()}}
@stop