<?php

return [
	'title' => '{file} - Edit - My Files',
	'breadcrumbs' => '{profile}{username}\'s Profile{/profile}{arrow}{files}Files{/files}{arrow}{file}{arrow}Edit',
	'form' => [
		'title' => 'Edit',
		'name' => [
			'title' => 'name',
			'description' => 'Renaming a file may break existing links to it.',
		],
		'unlisted' => 'unlisted',
		'submit' => 'Save',
	],
	'success' => [
		'title' => 'Success',
		'message' => 'Changes saved.',
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'File not found.',
	],
];
