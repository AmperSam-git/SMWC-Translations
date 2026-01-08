<?php

return [
	'title' => 'Leave Feedback',
	'editor' => 'Submit Feedback',
	'body' => [
		'main' => 'Use this page to send direct feedback to the site Administrators. You can give feedback on anything relevant to SMW Central, including suggestions and general ideas for the site, praise or criticism for decision making, or your personal thoughts on some matter.',
		'report' => 'If you are using this form to report a problem with a Staff member or another user, anonymously or otherwise, please provide additional details and examples as it could be something which we are unaware of.',
		'response' => 'Not all feedback will get a response. If we conclude it is necessary to respond, a public reply will be posted in the {link}Feedback Responses Thread{/link}. If you choose to share your identity, we may also contact you directly regarding your feedback.',
	],
	'form' => [
		'subject' => 'subject',
		'message' => [
			'title' => 'Your feedback',
			'rate' => 'The feedback form enforces a global rate limit to prevent abuse, and is currently unavailable. Please try again in 5 minutes.',
		],
		'reveal' => [
			'title' => 'Share identity',
			'label' => 'Share my identity',
			'description' => 'Your feedback is fully anonymous by default. If you check this option, your username will be attached to your message, which will allow us to contact you if necessary.',
		],
		'submit' => 'Send feedback',
		'preview' => 'Preview message',
	],
	'success' => [
		'title' => 'Success',
		'message' => 'Feedback sent.',
	],
	'error' => [
		'title' => 'Error',
		'message' => 'An internal error occurred while sending your feedback. Please try again later.',
	],
	'permission_denied' => [
		'title' => 'Error',
		'message' => 'You must be logged in to submit staff feedback.',
	],
];
