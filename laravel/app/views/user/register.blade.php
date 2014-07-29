@extends('templates/login')

@section('head-details')
<meta name="description" content="Log in to Takeoff Simulation">
@stop

@section('content')
	{{Form::open(array('url' => '/user/register', 'method' => 'POST'))}}
    	<div class = "login">
			{{Form::label('register', 'Register for Takeoff Sim', array('style' => 'color:deepskyblue'))}}<br>
			{{Form::label('firstname', 'First Name:')}}
			{{Form::text('first_name')}} <br>
			{{Form::label('lastname', 'Last Name:')}}
			{{Form::text('last_name')}} <br>
			{{Form::label('email', 'Email:')}}
			{{Form::text('email')}} <br>
			{{Form::label('password', 'Password:')}}
			{{Form::password('password')}} <br>
		</div>
		<br><br>
			{{Form::submit('Join!', array('id' => 'button-submit'))}}
	{{Form::close()}}
@stop