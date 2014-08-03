@extends('/templates/main')

@section('content')
	<br><br>
	<table>
		<tr>
			<th>Name</th><th>ICAO</th><th>IATA</th><th>Latitude</th><th>Longitude</th><th>Market Size</th><th>Hourly Flights</th><th>Slot Controlled</th><th>Runways</th>
		</tr>
	@foreach($airports as $a)
		<tr>
			<?PHP $slots = "yes";
				if(!$a->slot_controlled){
					$slots = "no";
				}?>
			<td>{{HTML::link('/backend/airport/'.$a->id, $a->name, array())}}</td><td>{{$a->icao}}</td><td>{{$a->iata}}</td><td>{{$a->latitude}}</td><td>{{$a->longitude}}</td><td>{{number_format($a->allocated_demand)}}</td><td>{{$a->max_flights_per_hour}}</td><td>{{$slots}}</td><td>{{$a->runways}}</td>
		<tr>
	@endforeach
	</table>
@stop