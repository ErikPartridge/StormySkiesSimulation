@extends('/templates/main')

@section('content')
	@foreach($airports as $a)
		{{$a}}<br>
	@endforeach
@stop