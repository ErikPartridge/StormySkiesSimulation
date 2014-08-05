@extends('/templates/main')
@section('head')
@stop
@section('content')
	<div id="container">
		<h3>{{$airplane->registration}}</h3>
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
				<td>Owner</td><td>{{$airplane->belongsTo('Airline', 'owner')->get()->first()['name']}}</td>
			</tr>
			<tr>
				<td>Type</td><td>{{$airplane->belongsTo('AircraftType', 'type')->get()->first()['name']}}</td>
			</tr>
			<tr>
				<td>Fin Number</td><td>{{$airplane->fin}}</td>
			</tr>
			<tr>
				<td>Engine</td><td>{{$airplane->belongsTo('Engine', 'engine')->get()->first()['name']}}</td>
			</tr>
			<tr>
				<td>Age</td><td>{{number_format($airplane->age, 2)}} years</td>
			</tr>
			<tr>
				<td>Cycles</td><td>{{number_format($airplane->cycles)}}</td>
			</tr>
			<tr>
				<td>Hours</td><td>{{number_format($airplane->hours, 2)}}</td>
			</tr>
			<tr>
				<td>Location</td><td>{{$airplane->belongsTo('Airport', 'location')->get()->first()['icao']}}</td>
			</tr>
			<tr>
				<td>Hours Available</td><td>{{number_format($airplane->hours_available, 1)}}</td>
			</tr>
		</table>
@stop