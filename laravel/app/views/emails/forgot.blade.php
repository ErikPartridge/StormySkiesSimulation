<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Reset Password Form:</h2>

		<div>
			To reset your password, please click this link: {{HTML::link('user/reset/'.$code.'/'.$email, "reset password.", array('method' => 'GET'), false)}}
		</div>
	</body>
</html>