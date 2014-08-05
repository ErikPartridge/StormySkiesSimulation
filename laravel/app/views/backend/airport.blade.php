@extends('/templates/main')

@section('content')
<div id="container">
		<h3>{{$airport->name}}</h3>
	</div>
	<table id ="center-table">
			<colgroup>
				<col id="column">
				<col id="column">
			</colgroup>
			<tr>
				<th>Name</th><th>Value</th>
			</tr>
			<tr>
				<td>Name</td><td>{{$airport->name}}</td>
			</tr>
			<tr>
				<td>Country</td><td>{{Country::find($airport->country_id)->name}}</td>
			</tr>
			<tr>
				<td>ICAO</td><td>{{$airport->icao}}</td>
			</tr>
			<tr>
				<td>IATA</td><td>{{$airport->iata}}</td>
			</tr>
			<tr>
				<td>Allocated Demand</td><td>{{number_format($airport->allocated_demand)}}</td>
			</tr>
			<tr>
				<td>Max Hourly Flights</td><td>{{$airport->max_flights_per_hour}}</td>
			</tr>
			<tr>
				<td>Runways</td><td>{{$airport->runways}}</td>
			</tr>
			<tr>
				<td>Gates</td><td>{{count($airport->hasMany('Gate', 'airport')->get())}}</td>
			</tr>
		</table>
@stop