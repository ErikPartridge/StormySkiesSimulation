@extends('templates/helper')
@section('head-details')
<meta name="description" content="A run down of TakeoffSim's reasonable, affordable prices.">
{{HTML::script('js/calx.min.js')}}
@stop
@section('content')
	<div class="pricing-content">
		<p>The way the pricing works here is you buy credits, and I try to keep it simple: one (1) credit is pays for one airline for one day. This means if you'd like to run 3 airlines, you use 93 credits in May, 90 credits in June, and 84 credits in an average February.</p>
		<p>All sales are final, no refunds will be issued, and charges may be levied for failed transactions or overdraft of credits.</p>

		<p>Payment is handled securely off-site through <a href="https://www.stripe.com">Stripe</a>; we do not store your credit card number on our servers.</p>
		<p>Numbers on this page are for approximation only.</p>
	</div>
	<hr>
	<h3 style="text-align:center; color:black;"><em>Price is approximately $1.80 per month per active airline, tokens are used daily. More details are available on your profile page.<em></h3>
	<hr>
@stop