<?php

return [
	'title' => '{file} - {Section}',
	'age_gate' => 'このファイルには未成年者に不適切なコンテンツが含まれています。',
	'breadcrumbs' => [
		'moderated' => '{link}{section}{/link}{arrow}{file}',
		'waiting' => '{link}モデレート待ちの{section}{/link}{arrow}{file}',
	],
	'action' => [
		'submit_update' => 'アップデートを送信',
		'edit' => '編集',
		'delete' => '削除',
		'claim' => 'クレーム',
		'free' => 'フリー',
		'approve' => '承認',
		'reject' => '拒否',
		'watch' => '通知を受け取る',
		'unwatch' => '通知を受け取らない',
		'random' => 'ランダムに見る',
		'link' => 'リンク',
	],
	'obsolete' => 'このファイルは廃止されました。最新バージョンは {latest_link}{latest}{/link}です。他のバージョンについては、{history_link}バージョン履歴{/link}をご確認ください。',
	'content' => [
		// TODO: Get translations
		// 'warning' => 'Player Discretion is Advised. Submission Contains the Following:',
		// 'photosensitivity' => 'Possible Photosensitivity Triggers',
		// 'crude_content' => 'Crude Content or Language',
		// 'suggestive_content' => 'Suggestive Content or Language',
		// 'sexual_content' => 'Sexual Content',
		// 'violence' => 'Violent Content',
	],
	'details' => '提出の詳細',
	'field' => [
		'name' => '名前:',
		'authors' => '作成者:|作成者:',
		'added' => '追加日時:',
		'history' => [
			'name' => 'バージョン履歴:',
			'view' => '見る',
		],
		'submitted' => [
			'name' => '送信日時:',
			'content' => '{date}に{user}が送信',
		],
		'obsoletes' => '廃止:',
		'submission_notes' => '送信ノート:',
		'preview' => 'プレビュー:',
		'tags' => [
			'name' => 'タグ:',
			'view_all' => 'このタグが付いているすべての投稿を表示',
		],
		'comments' => [
			'name' => 'コメント:',
			'jump' => 'コメントへジャンプ',
		],
		'rating' => [
			'name' => '評価:',
			'count' => '(1件の評価)|({count}件の評価)',
			'none' => '評価なし',
		],
		// TODO: Needs Translation
		// 'difficulty' => [
		// 	'name' => 'Difficulty:',
		// 	'level' => [
		// 		'diff_1' => 'Newcomer',
		// 		'diff_2' => 'Casual',
		// 		'diff_3' => 'Intermediate',
		// 		'diff_4' => 'Advanced',
		// 		'diff_5' => 'Expert',
		// 		'diff_6' => 'Master',
		// 		'diff_7' => 'Grandmaster',
		// 	],
		// 	'tooltip' => "",
		// ],
		'link' => [
			'name' => 'リンク:',
			'content' => 'リンク',
		],
		'claimed' => '{date} に {user} によるモデレーションを要求されました',
	],
	'download' => [
		'button' => 'ダウンロード',
		'info' => '{size} | {downloads}',
		'count' => '1 ダウンロード|{count} ダウンロード',
	],
	'rate' => [
		'name' => '評価:',
		'star' => '評価 {count}',
	],
	'images' => [
		'title' => 'スクリーンショット',
		'view_all' => '全て見る',
	],
	'comments' => [
		'title' => '[0] コメント|[*,*]コメント({count}件)',
		'form' => [
			'title' => 'コメントを投稿',
			'textarea' => 'コメントを投稿',
			'replying' => '{author}に返信: {text}',
			'unreply' => '返信をキャンセル',
			'submit' => '投稿',
			'preview' => 'プレビュー',
		],
		'option' => [
			'filter' => '次のコメントを表示:',
			'all' => '全てのバージョン',
			'current' => 'このバージョンのみ',
		],
		'badge' => [
			'author' => '作成者',
			'pinned' => '固定',
			'old' => '古いバージョンから:{link}{name}{/link}',
		],
		'link' => 'リンク',
		'reply' => '返信',
		'quote' => '引用',
		'pin' => '固定',
		'unpin' => '固定を解除',
		'edit' => '編集',
		'delete' => '削除',
	],
	'not_found' => [
		'title' => 'エラー',
		'message' => 'ファイルがありません。',
	],
];
