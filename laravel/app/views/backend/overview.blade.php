@extends('/templates/main')

@section('content')
<br>
<div class="t">
	@if(count($participated))
		<h2>Worlds You Participate In:</h2>
		<table>
		<tr>
			<th>Name</th><th>Users</th><th>Max Users</th><th>In-Game Time</th>
		</tr>
	@foreach($participated as $q)
			<?PHP $p = DB::table('worlds')->where('id', $q)->first(); ?>
			<tr>
				<?PHP $carbon = new Carbon\Carbon($p->current_time,'UTC') ?>
				<td>{{$p->name}}</td><td>{{$p->number_users}}</td><td>{{$p->cap}}</td><td>{{$carbon->toFormattedDateString()}}</td>	
			</tr>
	@endforeach
	</table>
	@endif
	<h2>Worlds Available:</h2>
	<table>
		<tr>
			<th>Name</th><th>Users</th><th>Max Users</th><th>In-Game Time</th><th>Join</th>
		</tr>
	@foreach($available as $p)
			<tr>
				<?PHP $carbon = new Carbon\Carbon($p->current_time,'UTC') ?>
				<td>{{$p->name}}</td><td>{{$p->number_users}}</td><td>{{$p->cap}}</td><td>{{$carbon->toFormattedDateString()}}</td><td>{{ Form::open(array('url' => '/backend/join_world', 'method' => 'POST'))}} {{Form::submit('Join!', array('name' => $p->id, 'class' => 'main-button'))}} {{Form::close()}}</td>	
			</tr>
	@endforeach
	</table>
	@if(count($full) > 0)
		<h2>Full Worlds:</h2>
		<table>
		<tr>
			<th>Name</th><th>Users</th><th>Max Users</th><th>In-Game Time</th>
		</tr>
		@foreach($full as $p)
			<tr>
				<?PHP $carbon = new Carbon\Carbon($p->current_time,'UTC') ?>
				<td>{{$p->name}}</td><td>{{$p->number_users}}</td><td>{{$p->cap}}</td><td>{{$carbon->toFormattedDateString()}}</td>	
			</tr>
		@endforeach
		</table>
	@endif
</div>
@stop