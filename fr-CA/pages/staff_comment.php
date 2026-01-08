<?php

return [
	'title' => 'Passer des commentaires au personnel',
	'editor' => 'Éditeur',
	'body' => [
		'main' => 'Utilisez cette page pour envoyer des commentaires directement aux administrateurs du site. Vous pouvez donnez des commentaires sur tout ce qui a trait à SMW Central, dont des suggestions ou des idées générales pour le site, des compliments ou des critiques sur une décision ou votre opinion personnelle à propos d\'un sujet quelconque.',
		'report' => 'Si vous utilisez ce formulaire pour signaler un problème avec un membre du personnel ou un autre utilisateur, anonymement ou non, veuillez fournir des détails et des exemples supplémentaires, car il se pourrait qu\'il s\'agisse d\'une situation dont nous ne sommes pas au courant.',
		'response' => 'Tous les commentaires ne receveront pas de réponse. Si nous jugeons qu\'il est nécessaire de répondre, une réponse publique sera publiée dans le {link}fil de réponses aux commentaires{/link}. Si vous décidez de nous faire part de votre identité, il se pourrait qu\'on vous contacte directement au sujet de vos commentaires.',
	],
	'form' => [
		'subject' => 'sujet',
		'message' => [
			'title' => 'Vos commentaires',
			'rate' => 'Afin de prévenir l\'abus, l\'envoi de commentaires au personnel est sujet à une limite de débit (« rate limit ») globale et n\'est présentement pas disponible. Veuillez réessayer dans 5 minutes.', // U+00AB left-pointing double angle quotation mark     U+00BB right-pointing double angle quotation mark
		],
		'reveal' => [
			'title' => 'Partage d\'identité',
			'label' => 'Partager mon identité',
			'description' => 'Les commentaires aux personnel sont anonymes par défaut. Si vous cochez cette option, par contre, votre nom d\'utilisateur sera rattaché à votre message, ce qui nous permettera de vous contacter si nécessaire.',
		],
		'submit' => 'Envoyer mes commentaires',
		'preview' => 'Aperçu du message',
	],
	'success' => [
		'title' => 'Succès',
		'message' => 'Vos commentaires ont été envoyés.',
	],
	'error' => [
		'title' => 'Erreur',
		'message' => 'Une erreur interne a eu lieu lors de l\'envoi de vos commentaires. Veuillez réessayer plus tard.',
	],
];
