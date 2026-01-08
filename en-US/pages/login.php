<?php

return [
	'title' => [
		'login' => 'Log In',
		'logout' => 'Log Out',
	],
	'body' => 'Forgot your password? Send a message to or email an {url}Administrator{/url} at the email address listed in their profile.',
	'forgot' => 'Forgot your password?',
	'totp' => 'Enter the code shown in your authenticator app. Alternatively, you can enter a recovery code.',
	'form' => [
		'username' => 'Username',
		'email_or_username' => 'Email or Username',
		'password' => 'Password',
		'totp' => 'Code',
		'login' => 'Log In',
	],
	'success' => [
		'title' => 'Log In',
		'message' => 'Log in successful.',
	],
	'failure' => [
		'title' => 'Log In',
		'message' => 'Log in failed.',
	],
	'member' => [
		'title' => 'Log In',
		'message' => 'You are already logged in.',
	],
	'error' => [
		'bad_credentials_without_email' => 'The username or password is incorrect.',
		'bad_credentials_with_email' => 'The username/email or password is incorrect.',
		'bad_totp' => 'The code is incorrect.',
	],
	'unverified' => [
		'body' => 'Your account isn\'t verified. Please check your email for a verification link.',
		'resend' => 'Resend Verification Email',
		'back' => 'Back',
	],
	'infraction' => [
		'body' => 'Your account has been disabled due to conduct or behaviour against our rules. The infraction is shown below.',
		'back' => 'Back',
	],
	'logout' => [
		'body' => 'Are you sure you want to log out?',
		'confirm' => 'Log Out',
		'cancel' => 'Go Back',
		'success' => [
			'title' => 'Log Out',
			'message' => 'Successfully logged out.',
		],
		'guest' => [
			'title' => 'Log Out',
			'message' => 'You are not logged in.',
		],
	],
];
