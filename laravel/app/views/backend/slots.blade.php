@extends('templates/main')

@section('content')
	@if($controlled)
		<div id="container">
			<br>
			<em>{{$apt->name}} is slot controlled, there are {{number_format($apt->max_flights_per_hour * 24)}} slots each day.</em>
			<p>Of those slots, {{number_format(($apt->max_flights_per_hour * 24) -count($apt->slots()))}} are available. You own {{count($owned)}} slots at {{$apt->name}}.</p>
			<?PHP $list = array();
				for($i = 0; $i < 100; $i++){
					array_push($list, $i);
				}?>
			{{Form::open(array('url' => '#', 'method' => 'POST'))}}
			{{Form::label('Buy slots:')}}
			{{Form::select('buy_amount', $list)}}
			{{Form::label('Sell slots:')}}
			{{Form::select('sell_amount', $list)}}
			<br><br>
			{{Form::submit('Submit', array('id' => 'submit', 'name' => 'submit'))}}
			{{Form::close()}}
		</div>
	@endif

	@if(!$controlled)
		<div id='container'>
			<h4>Sorry, {{$apt->name}} is not slot controlled. You may schedule flights to {{$apt->name}} without reserving slots, you only need gates to fly to {{$apt->icao}}.</h4>
		</div>
	@endif
@stop