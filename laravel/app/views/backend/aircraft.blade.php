@extends('/templates/main')

@section('content')
<br>
	<div id="container">
		<h3>{{$aircraft->name}}</h3>
		{{HTML::image('images/aircraft/'.$aircraft->icao.'.jpg', $aircraft->icao, array('id' => 'mid-image'))}}
		<br>
		<table id ="center-table">
			<colgroup>
				<col id="column">
				<col id="column">
			</colgroup>
			<tr>
				<th>Name</th><th>Value</th>
			</tr>
			<tr>
				<td>ICAO</td><td>{{$aircraft->icao}}</td>
			</tr>
			<tr>
				<td>Manufacturer</td><td>{{$aircraft->manufacturer}}</td>
			</tr>
			<tr>
				<td>Range</td><td>{{$aircraft->range}} mi</td>
			</tr>
			<tr>
				<td>Minimum Runway</td><td>{{$aircraft->minimum_runway}} feet</td>
			</tr>
			<tr>
				<td>Average Fuel Burn</td><td>~{{$aircraft->fuel_burn}} pph</td>
			</tr>
			<tr>
				<td>Cruise Speed</td><td>{{$aircraft->cruise_speed}} mph</td>
			</tr>
			<tr>
				<td>Maximum Seating</td><td>{{$aircraft->max_seats}}</td>
			</tr>
			<tr>
				<td>New Price</td><td>${{$aircraft->price}}</td>
			</tr>
		</table>
	</div>
</>
@stop