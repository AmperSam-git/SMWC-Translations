<?php

return [
	'title' => 'Comments by {username}',
	'breadcrumbs' => '{link}Profile for {username}{/link}{arrow}Comments',
	'count' => '{stats}{count}{/stats} comments found. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.', // U+2013 (EN DASH)
	'not_found' => [
		'title' => 'Error',
		'message' => 'The user you requested wasn\'t found.',
	],
	'no_comments' => [
		'title' => 'Error',
		'message' => 'This user hasn\'t posted any comments yet.',
	],
	'deleted_submission' => '(submission deleted)',
];
