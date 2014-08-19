@extends('templates/login')

@section('head-details')
<meta name="description" content="Register for Takeoff Simulation">
@stop

@section('content')
	{{Form::open(array('url' => '/user/register', 'method' => 'POST', 'id' => 'registerForm'))}}
    	<div class = "login">
			{{Form::label('register', 'Register for Takeoff Sim', array('style' => 'color:#0086B2'))}}<br>
			{{Form::label('firstname', 'First Name:')}}
			{{Form::text('first_name', '', array('type' => 'text', 'minlength' => '2', 'maxlength' => '255'))}} <br>
			{{Form::label('lastname', 'Last Name:')}}
			{{Form::text('last_name', '', array('type' => 'text', 'minlength' => '2', 'maxlength' => '255') )}} <br>
			{{Form::label('email', 'Email:')}}
			{{Form::email('email', '', array('type' => 'email'))}} <br>
			{{Form::label('password', 'Password:')}}
			{{Form::password('password', array('minlength' => '6', 'required' => 'required', 'id' => 'password'))}} <br>
		</div>
		<br><br>
			{{Form::submit('Join!', array('id' => 'button-submit'))}}
	{{Form::close()}}
	<script>
		$("#registerForm").validate();
	</script>
@stop