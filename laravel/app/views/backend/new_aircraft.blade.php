@extends('templates/main')
@section('content')
	{{Form::select('type', $types)}}
@stop