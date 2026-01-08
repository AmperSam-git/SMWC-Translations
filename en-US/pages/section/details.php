<?php

return [
	'title' => '{file} - {Section}',
	'age_gate' => 'This file contains content unsuitable for minors.',
	'breadcrumbs' => [
		'moderated' => '{link}{section}{/link}{arrow}{file}',
		'waiting' => '{link}Waiting {section}{/link}{arrow}{file}',
	],
	'action' => [
		'submit_update' => 'Submit Update',
		'edit' => 'Edit',
		'delete' => 'Delete',
		'claim' => 'Claim',
		'free' => 'Free',
		'approve' => 'Approve',
		'reject' => 'Reject',
		'watch' => 'Watch',
		'unwatch' => 'Unwatch',
		'random' => 'Show random',
	],
	'obsolete' => 'This file is obsolete. The latest version is {latest_link}{latest}{/link}. For other versions, check the {history_link}version history{/link}.',
	'content' => [
		'warning' => 'Player Discretion is Advised. Submission Contains the Following:',
		'photosensitivity' => 'Possible Photosensitivity Triggers',
		'crude_content' => 'Crude Content or Language',
		'suggestive_content' => 'Suggestive Content or Language',
		'sexual_content' => 'Sexual Content',
		'violence' => 'Violent Content',
	],
	'hof_message' => 'This hack is featured in our {link}Hall of Fame{/link}.',
	'details' => 'Submission Details',
	'name' => 'Submission',
	'field' => [
		'name' => 'Name:',
		'authors' => 'Author:|Authors:',
		'obsoletes' => 'Obsoletes:',
		'preview' => 'Preview:',
		'tags' => [
			'name' => 'Tags:',
			'view_all' => 'View all submissions with this tag',
		],
		'comments' => [
			'name' => 'Comments:',
			'jump' => 'View comments',
		],
		'rating' => [
			'name' => 'Rating:',
			'count' => '(1 rating)|({count} ratings)',
			'none' => 'No rating',
		],
		'difficulty' => [
			'name' => 'Difficulty:',
			'level' => [
				'diff_1' => 'Newcomer',
				'diff_2' => 'Casual',
				'diff_3' => 'Intermediate',
				'diff_4' => 'Advanced',
				'diff_5' => 'Expert',
				'diff_6' => 'Master',
				'diff_7' => 'Grandmaster',
			],
			'tooltip' => 'Hacks may be in one of seven Difficulty categories: Newcomer, Casual, Intermediate, Advanced, Expert, Master, or Grandmaster.',
		],
		'link' => [
			'name' => 'Short URL:',
			'content' => 'Link',
			'copy' => 'Copy',
		],
		'moderation' => 'Moderation Information',
		'submitted' => [
			'name' => 'Submitted by:',
			'content' => '{user} on {date}',
		],
		'submission_notes' => 'Notes:',
		'accepted' => [
			'name' => 'Accepted by:',
			'content' => '{user} on {date}',
		],
		'history' => [
			'name' => 'Version History:',
			'view' => 'View',
		],
		'claimed' => [
			'name' => 'Claimed by:',
			'content' => '{user} on {date}',
		],
		'waiting' => [
			'name' => 'Waiting:',
			'content' => '{date}',
		],
	],
	'download' => [
		'button' => 'Download',
		'info' => '{size} | {downloads}',
		'count' => '1 download|{count} downloads',
	],
	'rate' => [
		'name' => 'Rate:',
		'star' => 'Rate {count}',
		'revoke' => 'Remove Rating',
	],
	'images' => [
		'title' => 'Screenshots',
		'view_all' => 'View all',
	],
	'comments' => [
		'title' => '[0] Comments|[*,*]Comments ({count})',
		'form' => [
			'title' => 'Post a Comment',
			'textarea' => 'Comment',
			'replying' => 'Replying to {author} {text}',
			'unreply' => 'Cancel',
			'submit' => 'Post',
			'preview' => 'Preview',
		],
		'option' => [
			'filter' => 'Showing comments from:',
			'all' => 'All versions',
			'current' => 'Only this version',
		],
		'badge' => [
			'author' => 'Author',
			'pinned' => 'Pinned',
			'old' => 'From older version: {link}{name}{/link}',
		],
		'link' => 'Link',
		'reply' => 'Reply',
		'quote' => 'Quote',
		'pin' => 'Pin',
		'unpin' => 'Unpin',
		'edit' => 'Edit',
		'delete' => 'Delete',
	],
	'not_found' => [
		'title' => 'Error',
		'message' => 'File not found.',
	],
];
