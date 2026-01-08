<?php

return [
	'title' => 'Member List',
	'count' => '{stats}{count}{/stats} members found. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
	'filter' => [
		'title' => 'Filter',
		'username' => 'Username:',
		'staff_search' => 'Search Term',
		'inactive' => 'Show inactive users',
		'ip' => 'Search by last IP',
		'submit' => 'Filter',
		'search_by' => [
			'username' => 'Search by username',
			'ip' => 'Search by IP',
			'group' => 'Search group members',
			'email' => 'Search by email',
		],
	],
	'list' => [
		'number' => '#',
		'username' => 'Username',
		'since' => 'Since',
		'posts' => 'Posts',
		'totp' => '2FA Status',
		'email_status' => 'Email Status',
		'ip' => 'Last IP',
		'reveal' => 'Reveal',
		'empty' => 'No members found.',
	],
	'totp' => [
		'no' => 'No',
		'yes' => 'Yes',
		'na' => 'N/A',
	],
	'email_verification' => [
		'no' => 'Unverified',
		'legacy' => 'Legacy',
		'yes' => 'Verified',
		'na' => 'N/A',
	],
];
