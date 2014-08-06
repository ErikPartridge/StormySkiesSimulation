@extends('/templates/main')

@section('content')
	<div id="container">
			<br>
			<em>{{$apt->name}} has a total of {{$apt->gates}} gates.</em>
			<p>Of those gates, {{($apt->gates - count($apt->hasMany('Gate', 'airport')->get()))}} are available. You own {{count($owned)}} gates at {{$apt->name}}.</p>
			<?PHP $list = array();
				for($i = 0; $i < 100; $i++){
					array_push($list, $i);
				}?>
			{{Form::open(array('url' => '#', 'method' => 'POST'))}}
			{{Form::label('Buy Gates:')}}
			{{Form::select('buy_amount', $list)}}
			{{Form::label('Sell Gates:')}}
			{{Form::select('sell_amount', $list)}}
			<br><br>
			{{Form::submit('Submit', array('id' => 'submit', 'name' => 'submit'))}}
			{{Form::close()}}
	</div>
@stop