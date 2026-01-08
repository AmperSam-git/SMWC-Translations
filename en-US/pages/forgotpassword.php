<?php

return [
	'title' => 'Forgot Password',
	'form' => [
		'email' => [
			'title' => 'Email',
			'description' => 'Provide the email address of your account to be sent a reset link. This form applies only for users with a verified email in their account. For further assistance, contact an {link}Administrator{/link}.',
		],
		'password' => [
			'title' => 'New password',
			'confirmed' => 'The passwords don\'t match.',
		],
		'password_confirmation' => 'Retype new password',
		'submit' => 'Submit',
	],
	'passwords' => [
		'reset' => 'Your password has been reset.',
		'sent' => 'We have emailed your password reset link.',
		'throttled' => 'Please wait before retrying.',
		'token' => 'This password reset token is invalid.',
		'user' => "We can't find a user with that email address.",
	],
];
