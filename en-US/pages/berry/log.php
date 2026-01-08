<?php

return [
    'title' => 'Berry Log',
    'no_c3' => [
        'title' => 'Error',
        'message' => 'Berries aren\'t in season at the moment.',
    ],
    'breadcrumbs' => [
        'berry_panel' => 'Berry Panel',
        'berry_stats' => 'Berry Stats',
    ],
    'count' => '{stats}{count}{/stats} entries found. Showing {stats}{start}{/stats}–{stats}{end}{/stats}.',
    'filter' => [
        'title' => 'Filter',
        'action_username' => 'Action by Username:',
        'target_username' => 'Target Username:',
        'action' => 'Action:',
        'submit' => 'Filter',
    ],
    'action_list' => [
        'award' => 'Berry Given',
        'remove' => 'Berry Removed by User',
        'srevoke' => 'Berry Revoked by Staff',
        'pdelete' => 'Post Deleted',
        'tdelete' => 'Thread Moved/Deleted',
    ],
    'action_description' => [
        'award' => '{action_username} gave a berry to {target_username} for post {post} in {thread}.',
        'remove' => '{action_username} took {target_username}\'s berry back for post {post} in {thread}.',
        'srevoke' => '{action_username} revoked {target_username}\'s berry for post {post} in {thread}.',
        'pdelete' => '{action_username} deleted {target_username}\'s post {post}, so their berry was automatically removed.',
        'tdelete' => '{action_username} moved/deleted {thread} from the C3 forum, so {target_username}\'s berry for post {post} was automatically removed.',
    ],
    'restricted_post' => '(restricted post)',
    'restricted_thread' => '(restricted thread)',
];
