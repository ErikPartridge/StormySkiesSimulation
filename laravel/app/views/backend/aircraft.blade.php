@extends('/templates/main')

@section('content')
<br>
	<div id="container">
		<h3>{{$aircraft->name}}</h3>
		{{HTML::image('images/aircraft/'.$aircraft->icao.'.jpg', $aircraft->icao, array('id' => 'mid-image'))}}
	</div>
</>
@stop