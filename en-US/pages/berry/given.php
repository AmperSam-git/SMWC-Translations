<?php

return [
    'title' => 'Berries Given',
    'title_thread' => 'View Berries for {thread_title}',
    'no_c3' => [
        'title' => 'Error',
        'message' => 'Berries aren\'t in season at the moment.',
    ],
    'invalid_thread' => [
        'title' => 'Error',
        'message' => 'Invalid thread.',
    ],
    'count' => '{stats}{count}{/stats} berries found. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.',
	'filter' => [
		'title' => 'Filter',
		'search_term' => 'Search Term:',
        'search_by' => [
            'awarded_to' => 'Search by receiver username',
            'awarded_by' => 'Search by giver username',
            'thread' => 'Search by thread title',
        ],
        'submit' => 'Filter',
	],
    'header' => [
        'thread' => 'Thread - Post ID',
        'given_to' => 'Given To - {sort_link}Given On{/sort_link}',
        'given_by' => 'Given By',
	],
    'table' => [
        'thread' => '{link}{title}{/link} by {author}',
        'post_id' => 'Post ID {link}#{id}{/link}',
        'on' => 'On {date}',
    ],
    'actions' => [
        'remove' => 'Remove',
    ],
    'breadcrumbs' => [
        'berry_panel' => 'Berry Panel',
        'berry_stats' => 'Berry Stats',
    ],
];
