@extends('/templates/main')

@section('content')
	<div class = "container">
	<br><br>
	<table id ="unbounded-table">
			<colgroup>
				<col id="col-one">
				<col id="col-one">
			</colgroup>
			<tr>
				<th>Airport</th><th>Number</th>
			</tr>
			@foreach($gates as $g)
				<tr>	
					<td>{{Airport::find($g->airport)->name}}</td><td>{{$g->number}}</td>
				</tr>
			@endforeach
		</table>
	</div>
@stop