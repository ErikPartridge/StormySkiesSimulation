@extends('/templates/main')

@section('content')
<br>
<div class="t">
	@if($count > 0)
		<h2>Worlds You Participate In:</h2>
		<table border="1">
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
	<table border="1">
		<tr>
			<th>Name</th><th>Users</th><th>Max Users</th><th>In-Game Time</th><th>Join</th>
		</tr>
	@foreach($worlds as $p)
		@if($p->number_users < $p->cap)
			<tr>
				<?PHP $carbon = new Carbon\Carbon($p->current_time,'UTC') ?>
				<td>{{$p->name}}</td><td>{{$p->number_users}}</td><td>{{$p->cap}}</td><td>{{$carbon->toFormattedDateString()}}</td><td>{{HTML::link('backend/join_world/$p->id', "Join", array())}}</td>	
			</tr>
		@endif
	@endforeach
	</table>
	@if($full > 0)
		<h2>Full Worlds:</h2>
		<table border="1">
		<tr>
			<th>Name</th><th>Users</th><th>Max Users</th><th>In-Game Time</th>
		</tr>
		@foreach($worlds as $p)
			@if($p->number_users == $p->cap)
			<tr>
				<?PHP $carbon = new Carbon\Carbon($p->current_time,'UTC') ?>
				<td>{{$p->name}}</td><td>{{$p->number_users}}</td><td>{{$p->cap}}</td><td>{{$carbon->toFormattedDateString()}}</td>	
			</tr>
			@endif
		@endforeach
		</table>
	@endif
</div>
@stop