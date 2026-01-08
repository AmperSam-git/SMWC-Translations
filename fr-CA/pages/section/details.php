<?php

return [
	'title' => '{file} - {Section}',
	'age_gate' => 'Ce fichier contient du contenu inapproprié pour les mineurs.',
	'breadcrumbs' => [
		'moderated' => '{link}{section}{/link}{arrow}{file}',
		'waiting' => '{link}{section} en attente{/link}{arrow}{file}',
	],
	'action' => [
		'submit_update' => 'Soumettre une mise à jour',
		'edit' => 'Modifier',
		'delete' => 'Supprimer',
		'claim' => 'Réserver',
		'free' => 'Libérer',
		'approve' => 'Approuver',
		'reject' => 'Rejeter',
		'watch' => 'Surveiller',
		'unwatch' => 'Dé-surveiller',
		'random' => 'Soumission aléatoire',
	],
	'obsolete' => 'Ce fichier est désuet. La version actuelle est {latest_link}{latest}{/link}. Pour les autres versions, consultez {history_link}l\'historique des versions{/link}.',
	'content' => [
		'warning' => 'Pour public averti. Cette soumission contient:',
		'photosensitivity' => 'Des déclencheurs de photosensibilité possibles',
		'crude_content' => 'Du contenu ou du langage vulgaire',
		'suggestive_content' => 'Du contenu ou du langage suggestif',
		'sexual_content' => 'Du contenu sexuel',
		'violence' => 'Du contenu violent',
	],
	'details' => 'Détails de la soumission',
	'field' => [
		'name' => 'Nom:',
		'authors' => 'Auteur:|Auteurs:',
		'added' => 'Ajouté le:',
		'history' => [
			'name' => 'Historique des versions:',
			'view' => 'Consulter',
		],
		'submitted' => [
			'name' => 'Soumis le:',
			'content' => '{date} par {user}',
		],
		'obsoletes' => 'Écrase:',
		'submission_notes' => 'Notes à propos de la soumission:',
		'preview' => 'Aperçu:',
		'tags' => [
			'name' => 'Étiquettes:',
			'view_all' => 'Voir toutes les soumissions avec cette étiquette',
		],
		'comments' => [
			'name' => 'Commentaires:',
			'jump' => 'Aller aux commentaires',
		],
		'rating' => [
			'name' => 'Étoiles:',
			'count' => '(1 cotation)|({count} cotations)',
			'none' => 'Aucune cotation',
		],
		'difficulty' => [
			'name' => 'Difficulté',
			'level' => [
				'diff_1' => 'Débutant',
				'diff_2' => 'Novice',
				'diff_3' => 'Intermédiaire',
				'diff_4' => 'Avancé',
				'diff_5' => 'Expert',
				'diff_6' => 'Maître',
				'diff_7' => 'Grand Maître',
			],
		],
		'link' => [
			'name' => 'URL courte:',
			'content' => 'Lien',
		],
		'claimed' => 'Réservé le {date}, pour être modéré par {user}',
	],
	'download' => [
		'button' => 'Télécharger',
		'info' => '{size} | {downloads}',
		'count' => '1 téléchargement|{count} téléchargements',
	],
	'rate' => [
		'name' => 'Coter:',
		'star' => 'Coter {count}',
	],
	'images' => [
		'title' => 'Captures d\'écran',
		'view_all' => 'Tous afficher',
	],
	'comments' => [
		'title' => '[0] Commentaires|[*,*]Commentaires ({count})',
		'form' => [
			'title' => 'Publier un commentaire',
			'textarea' => 'Commentaire',
			'replying' => 'En réponse à to {author}: {text}',
			'unreply' => 'Annuler',
			'submit' => 'Publier',
			'preview' => 'Aperçu',
		],
		'option' => [
			'filter' => 'Afficher les commentaires liés à:',
			'all' => 'Toutes les versions',
			'current' => 'Seulement cette version',
		],
		'badge' => [
			'author' => 'Auteur',
			'pinned' => 'Épinglé',
			'old' => 'Provenant d\'une ancienne version: {link}{name}{/link}',
		],
		'link' => 'Lien',
		'reply' => 'Répondre',
		'quote' => 'Citer',
		'pin' => 'Épingler',
		'unpin' => 'Désépingler',
		'edit' => 'Modifier',
		'delete' => 'Supprimer',
	],
	'not_found' => [
		'title' => 'Erreur',
		'message' => 'Fichier non trouvé.',
	],
];
