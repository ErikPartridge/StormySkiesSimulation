@extends('/templates/main')

@section('content')
<div id="container">
	<em>Hi, {{$user->first_name}}. You are very close to joining {{$world->name}}. Just follow the steps below, confirm you have paid, and you'll be on your way.</em>
<div id="form-align" style="text-align: right; padding-left:30%; padding-right:42.5%;">
	<br><br>
	{{Form::open(array('url' => '#', 'method' => 'POST'))}}
	{{Form::label('n', 'Name of Airline:')}}
	{{Form::text('name')}}
	<br><br>
	{{Form::label('ao', 'ICAO Code (3-letter):')}}
	{{Form::text('icao')}}
	<br><br>
	{{Form::label('at', 'IATA Code (2-letter):')}}
	{{Form::text('iata')}}
	<br><br>
	{{Form::label('hq', 'Headquarters:')}}
	{{Form::select('headquarters', $airports)}}
	<br><br>
</div>
	<p><em>You will be given $10,000,000 to start out with, as well as one Airbus A320-200.</em></p>
	<p><em>All other values will be set to defaults ($50,000 salaries, etc.).</em></p>
	{{Form::submit('Submit')}}
	{{Form::close()}}
</div>
@stop