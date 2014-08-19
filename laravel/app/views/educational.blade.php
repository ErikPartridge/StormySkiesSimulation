@extends('templates/helper')
@section('head-details')
	<meta name="description" content="TakeoffSim can help teach you about money management as well as to help prepare you in starting your own business.">
	{{HTML::style('unsemantic.css')}}
@stop
@section('content')
	<h1 style="text-align:center;">TakeoffSim in Education</h1>
	<div class="helper-content">
		<p style="font-size:1.2em;">{{HTML::image('/images/core/education.svg', "Education", array('width' => '20%', 'style'=>'float:left;padding-right:5%;'))}}
		The airline industry is well-known to be one of the most competitive industries in the world.
		With that in mind, what better way to learn, than to try your hand at the most difficult challenge you can find? TakeoffSim
		can help prepare students for starting their own company, with one having to manage small budgets early on, and a need to scale
		one's business for success. Not only that, but forward planning is also crucial for any successful business. If you'd like
		to use TakeoffSim in the classroom, please don't hesitate to <a href="mailto:admin@takeoffsim.com">contact me</a> for special rates and private worlds.</p>
	</div>
@stop