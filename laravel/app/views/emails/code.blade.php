<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Please confirm your account for Takeoff Sim</h2>

		<div>
			To confirm your registration, please click this link: {{HTML::link('user/code/'.$code, "Confirm", array('method' => 'POST'), false)}}
		</div>
	</body>
</html>