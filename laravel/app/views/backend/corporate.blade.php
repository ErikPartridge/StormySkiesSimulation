@extends('/templates/main')

@section('content')
	<br><br>
	<table id ="center-table">
			<colgroup>
				<col id="column">
				<col id="column">
			</colgroup>
			<tr>
				<th>Name</th><th>Value</th>
			</tr>
			<?PHP $user = User::find($airline->ceo); ?>
			<tr>
				<td>Owner</td><td>{{$user->first_name.' '.$user->last_name}}</td>
			</tr>
			<tr>
				<td>ICAO</td><td>{{$airline->icao}}</td>
			</tr>
			<tr>
				<td>IATA</td><td>{{$airline->iata}}</td>
			</tr>
			<tr>
				<td>Name</td><td>{{$airline->name}}</td>
			</tr>
			<tr>
				<td>Headquarters</td><td>{{Airport::find($airline->headquarters)->name}}</td>
			</tr>
			<tr>
				<td>Reputation</td><td>{{$airline->reputation}}</td>
			</tr>
			<tr>
				<td>Earnings</td><td>${{number_format($airline->earnings)}}</td>
			</tr>
			<tr>
				<td>Costs</td><td>${{number_format($airline->costs)}}</td>
			</tr>
			<tr>
				<td>Cash</td><td>${{number_format($airline->profits)}}</td>
			</tr>
	</table>
@stop