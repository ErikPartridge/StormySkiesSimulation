@extends('/templates/main')

@section('content')
<br>
<div class="t">
	@if($count > 0)
		<h2>Worlds You Participate In:</h2>
		@foreach($participated as $p)
			{{$p}}
		@endforeach
	@endif
	<h2>Worlds Available:</h2>
	@foreach($worlds as $p)
		@if($p->numberUsers < $p->cap)
			{{$p}}
		@endif
	@endforeach

	@if($full > 0)
		<h2>Full Worlds:</h2>
		@foreach($worlds as $p)
			@if($p->numberUsers == $p->cap)
				{{$p}}
			@endif
		@endforeach
	@endif
</div>
@stop