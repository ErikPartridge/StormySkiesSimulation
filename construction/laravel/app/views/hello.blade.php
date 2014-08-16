<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Erik Malmstrom-Partridge">
	<title>Takeoff Simulation</title>
	{{HTML::style('css/main.css')}}
</head>
<body>
	<div id="box">
		@if(Session::has('sorry'))
			<div style="color:red;text-align:center;font-family:sans-serif;">No need to sign up twice! Your email is already on file.</div>
		@endif
		<div id="content">
			<h3 style="text-align:center; font-family: 'Candara', sans-serif;font-size: 2em;">Takeoff Simulation is getting bigger and better!</h3>
			<em>We're currently working hard on making Takeoff Simulation ready for your eyes. Please let us know who you are below, and we'll let you know when the simulation is ready for you!</em>
			<div id="form">
				<br>
				{{Form::open(array('method' => 'POST', 'url' => 'success'))}}
					{{Form::label('first', 'Your First Name:')}}
					{{Form::text('first')}}<br><br>
					{{Form::label('last', 'Your Last Name:')}}
					{{Form::text('last')}}<br><br>
					{{Form::label('Your email:')}}
					{{Form::email('email')}}<br><br>
					<div id = "button">
						{{Form::submit('Submit', array('id' => 'sub'))}}
					</div>
				{{Form::close()}}
			</div>
			*Your information will never be sold.
		</div>
	</div>
</body>
</html>
