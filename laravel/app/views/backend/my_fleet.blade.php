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
				<th>Registration</th><th>Type</th><th>Age</th><th>Value</th><th>Hours Available</th>
			</tr>
			@foreach($fleet as $plane)
				<tr>	
					<?PHP $path = 'backend/aircraft/'.$plane['type'];
						  $planePath = 'backend/airplane/'.$plane['id'];
						  $type = AircraftType::find($plane['type']) ?>
					<td>{{HTML::link($planePath,$plane['registration'], array())}}</td><td>{{HTML::link($path, $type->name, array())}}</td><td>{{$plane['age']}} years</td><td>${{number_format($plane->value($type, $plane['cycles']))}}</td><td>{{number_format($plane['hours_available'])}} hours</td>
				</tr>
			@endforeach
		</table>
	</div>
@stop