@extends('/templates/main')
@section('head')
@stop
@section('content')
	<div id="container">
		<h2>{{$airline->name}}'s Fleet</h2>
		<table id ="unbounded-table">
			<colgroup>
				<col id="col-one">
				<col id="col-one">
				<col id="col-one">
				<col id="col-one">
				<col id="col-one">
				<col id="col-one">
			</colgroup>
			<tr>
				<th>Registration</th><th>Type</th><th>Age</th><th>Value</th><th>Hours Available</th><th>Sell</th>
			</tr>
			@foreach(Airplane::all() as $a)
				{{$a}}
			@endforeach
			@foreach($airline->hasMany('Airplane', 'owner') as $plane)
				<tr>
					<td>{{$plane->registration}}</td><td>{{HTML::link('backend/aircraft/$plane->type', $plane->type->icao, array())}}</td>
			@endforeach
		</table>
	</div>
@stop