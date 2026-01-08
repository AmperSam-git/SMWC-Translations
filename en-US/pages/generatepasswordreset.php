<?php

return [
	'title' => 'Generate Password Reset Link',
	'body' => 'You are about to reset {user}\'s password. Enter the code shown in your 2FA authenticator app to confirm.',
	'done' => 'Password reset successfully. Send the following link to the user. The link will expire after 72 hours.',
	'form' => [
		'totp_code' => [
			'title' => 'Code',
			'bad_totp' => 'The code is incorrect.',
		],
		'submit' => 'Reset Password',
	],
];
