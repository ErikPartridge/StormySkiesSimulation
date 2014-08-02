@extends('/templates/main')

@section('content')
	<div id="container">
		<h3 style="text-align:center">Used Aircraft For Sale</h3>
		<table>
			<tr>
				<th>Registration</th><th>Type</th><th>Owner</th><th>Price</th><th>Buy</th>
			</tr>
			@foreach($planes as $p)
				<tr>
				<?PHP $path = 'backend/aircraft/'.$p->type;
						  $planePath = 'backend/airplane/'.$p->id;
						   ?>
					<td>{{HTML::link($planePath,$p->registration, array())}}</td><td>{{HTML::link($path, AircraftType::find($p->type)->name, array())}}</td><td>{{Airline::find($p->owner)->name}}</td><td>${{number_format($p->value($types))}}</td><td>{{ Form::open(array('url' => '#','method' => 'POST'))}} {{Form::submit('Buy', array('name' => $p->id, 'class' => 'main-button'))}} {{Form::close()}}</td>
				</tr>
			@endforeach
		</table>
	</div>
@stop