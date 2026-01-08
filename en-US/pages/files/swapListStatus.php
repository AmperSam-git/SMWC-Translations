<?php

return [
	'title' => 'List/Unlist File(s)',
	'text' => 'List/unlist the following file?|List/unlist the following files?',
    'confirm' => 'Confirm',
	'cancel' => 'Cancel',
    'header' => [
		'name' => 'Name',
		'date' => 'Date',
	],
	'explanation' => [
		'list' => 'The below files will be listed publicly in your File Bin.',
		'unlist' => 'The below files will be unlisted in your File Bin. Others can\'t see unlisted files in your File Bin, but they can access them if you share the URL. All rules still apply for unlisted files.',
	],
    'info' => [
		'file' => '{type} | {size}',
    ],
	'no_files' => [
		'title' => 'Error',
		'message' => 'No files specified.',
	],
    'failed' => [
		'title' => 'Error',
		'message' => 'Failed to update file listed/unlisted status.',
	],
	'success' => [
		'title' => 'Success',
		'message' => 'File(s) list/unlisted status updated successfully.',
	],
	'partial' => [
		'title' => 'Error',
		'message' => 'File(s) list/unlisted status partially updated.',
	],
];
