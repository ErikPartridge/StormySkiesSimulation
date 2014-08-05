@extends('templates/login')

@section('head-details')
<meta name="description" content="Success!">
@stop

@section('content')
<div class = "success">
	Hi, {{{$name}}}! Thanks for creating an account! Check follow steps in your email to confirm your account, then {{HTML::link('user/login', 'login')}}.
	Happy managing. 
</div>
@stop