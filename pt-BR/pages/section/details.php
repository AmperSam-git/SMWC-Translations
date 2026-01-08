<?php

return [
	'title' => '{file} - {Section}',
	'age_gate' => 'Este arquivo pode conter conteúdo não adequado para menores de idade.',
	'breadcrumbs' => [
		'moderated' => '{link}{section}{/link}{arrow}{file}',
		'waiting' => '{link}Em espera {section}{/link}{arrow}{file}',
	],
	'action' => [
		'submit_update' => 'Submeter Atualização',
		'edit' => 'Editar',
		'delete' => 'Excluir',
		'claim' => 'Reivindicar',
		'free' => 'Liberar',
		'approve' => 'Aprovar',
		'reject' => 'Rejeitar',
		'watch' => 'Observar',
		'unwatch' => 'Desobservar',
		'random' => 'Mostrar aleatório',
	],
	'obsolete' => 'Este arquivo é obsoleto. Sua última versão é {latest_link}{latest}{/link}. Para outras versões, confira o {history_link}histórico de versões{/link}.',
	'content' => [
		'warning' => 'Recomenda-se discrição do jogador. O arquivo contém o seguinte:',
		'suggestive_content' => 'Conteúdo ou Linguagem Sugestivo(a)',
		'crude_content' => 'Conteúdo ou Linguagem Grosseiro (a)',
		'sexual_content' => 'Conteúdo Sexual',
		'violence' => 'Violência',
		'photosensitivity' => 'Possíveis Gatilhos de Fotossensibilidade',
	],
	'details' => 'Detalhes da Submissão',
	'field' => [
		'name' => 'Nome:',
		'authors' => 'Autor:|Autores:',
		'added' => 'Adicionado:',
		'history' => [
			'name' => 'Histórico de Versões:',
			'view' => 'Ver',
		],
		'submitted' => [
			'name' => 'Submetido:',
			'content' => '{date} por {user}',
		],
		'obsoletes' => 'Obsoletos:',
		'submission_notes' => 'Notas da Submissão:',
		'preview' => 'Visualização:',
		'tags' => [
			'name' => 'Marcadores:',
			'view_all' => 'Ver todas as submissões com este marcador',
		],
		'comments' => [
			'name' => 'Comentários:',
			'jump' => 'Pular para comentários',
		],
		'rating' => [
			'name' => 'Avaliação:',
			'count' => '(1 avaliação)|({count} avaliações)',
			'none' => 'Sem avaliações',
		],
		'difficulty' => [
			'name' => 'Dificuldade',
			'level' => [
				'diff_1' => 'Novato',
				'diff_2' => 'Casual',
				'diff_3' => 'Intermédio',
				'diff_4' => 'Avançado',
				'diff_5' => 'Especialista',
				'diff_6' => 'Mestre',
				'diff_7' => 'Grande Mestre',
			],
		],
		'link' => [
			'name' => 'Link:',
			'content' => 'Link',
		],
		'claimed' => 'Reivindicado para moderação por {user} em {date}',
	],
	'download' => [
		'button' => 'Download',
		'info' => '{size} | {downloads}',
		'count' => '1 download|{count} downloads',
	],
	'rate' => [
		'name' => 'Avaliar:',
		'star' => 'Avaliar {count}',
	],
	'images' => [
		'title' => 'Capturas de Tela',
		'view_all' => 'Ver todas',
	],
	'comments' => [
		'title' => '[0] Comentários|[*,*]Comentários ({count})',
		'form' => [
			'textarea' => 'Poste um comentário',
			'submit' => 'Postar',
		],
		'avatar' => 'Avatar',
		'link' => 'Link',
		'quote' => 'Mencionar',
		'edit' => 'Editar',
		'delete' => 'Excluir',
	],
	'not_found' => [
		'title' => 'Erro',
		'message' => 'Arquivo não encontrado.',
	],
];
