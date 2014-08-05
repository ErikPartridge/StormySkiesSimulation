@extends('/templates/main')

@section('content')
<h3>{{$r->flight_number}}</h3>
<div class="map" id="map" style="height:20%"></div>
<script>
	var map = L.map('map', {
    	center: [{{$lat}}, {{$lon}}],
    	zoom: 4
	});
	L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    maxZoom: 9
	}).addTo(map);
	<?PHP $depart = Airport::find($r->depart);
		$arrive = Airport::find($r->arrive);
		?>
	var {{$r->flight_number.'depart'}} = L.latLng({{$depart->latitude}}, {{$depart->longitude}});
	var {{$r->flight_number.'arrive'}} = L.latLng({{$arrive->latitude}}, {{$arrive->longitude}});
	var {{$r->flight_number.'array'}} = [{{$r->flight_number.'depart'}}, {{$r->flight_number.'arrive'}}];
	var {{$r->flight_number}} = L.polyline({{$r->flight_number.'array'}}, {color: 'red'}).addTo(map);
	{{$r->flight_number}}.bindPopup("{{$r->flight_number}} {{$depart->icao}}-{{$arrive->icao}}");
</script>
@stop