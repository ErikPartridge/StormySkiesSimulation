@extends('/templates/main')
@section('head-details')
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
@stop
@section('content')
<?PHP $hq = Airport::find($airline->headquarters);
	$lat = $hq->latitude;
	$lon = $hq->longitude;
 ?>
  <br><br><br>
  <div class="map" id="map"style="height:80%"></div>
 <script>
	var map = L.map('map', {
    	center: [{{$lat}}, {{$lon}}],
    	zoom: 4
	});
	L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    maxZoom: 9
	}).addTo(map);
@foreach($routes as $r)
	<?PHP $depart = null;
		$arrive = null;
		foreach($airports as $a){
			if($a->id == $r->depart){
				$depart = $a;
			}
			if($a->id == $r->arrive){
				$arrive = $a;
			}
		}?>
	var {{$r->flight_number.'depart'}} = L.latLng({{$depart->latitude}}, {{$depart->longitude}});
	var {{$r->flight_number.'arrive'}} = L.latLng({{$arrive->latitude}}, {{$arrive->longitude}});
	var {{$r->flight_number.'array'}} = [{{$r->flight_number.'depart'}}, {{$r->flight_number.'arrive'}}];
	var {{$r->flight_number}} = L.polyline({{$r->flight_number.'array'}}, {color: 'red'}).addTo(map);
	{{$r->flight_number}}.bindPopup("{{$r->flight_number}} {{$depart->icao}}-{{$arrive->icao}}");
@endforeach
</script>
@stop