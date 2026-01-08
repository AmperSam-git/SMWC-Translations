<?php

return [
	'field' => [
		'title' => '{Title}:',
	],
	'validation' => [
		'message' => '{message}',
		'token' => 'Invalid token. Please try again.',
		
		'bad_totp' => 'The code is incorrect.',
		
		/*
		|--------------------------------------------------------------------------
		| Validation Language Lines
		|--------------------------------------------------------------------------
		|
		| The following language lines contain the default error messages used by
		| the validator class. Some of these rules have multiple versions such
		| as the size rules. Feel free to tweak each of these messages here.
		|
		*/

		'accepted' => 'The {title} field must be accepted.',
		'accepted_if' => 'The {title} field must be accepted when {other} is {value}.',
		'active_url' => 'The {title} field must be a valid URL.',
		'after' => 'The {title} field must be a date after {date}.',
		'after_or_equal' => 'The {title} field must be a date after or equal to {date}.',
		'alpha' => 'The {title} field must only contain letters.',
		'alpha_dash' => 'The {title} field must only contain letters, numbers, dashes, and underscores.',
		'alpha_num' => 'The {title} field must only contain letters and numbers.',
		'array' => 'The {title} field has invalid data.',
		'ascii' => 'The {title} field must only contain single-byte alphanumeric characters and symbols.',
		'before' => 'The {title} field must be a date before {date}.',
		'before_or_equal' => 'The {title} field must be a date before or equal to {date}.',
		'between' => [
			'array' => 'The {title} field must have between {min} and {max} items.',
			'file' => 'The {title} field must be between {min} and {max} kilobytes.',
			'numeric' => 'The {title} field must be between {min} and {max}.',
			'string' => 'The {title} field must be between {min} and {max} characters.',
		],
		'boolean' => 'The {title} field must be true or false.',
		'can' => 'The {title} field contains an unauthorized value.',
		'confirmed' => 'The {title} field confirmation does not match.',
		'current_password' => 'The password is incorrect.',
		'date' => 'The {title} field must be a valid date.',
		'date_equals' => 'The {title} field must be a date equal to {date}.',
		'date_format' => 'The {title} field must match the format {format}.',
		'decimal' => 'The {title} field must have {decimal} decimal places.',
		'declined' => 'The {title} field must be declined.',
		'declined_if' => 'The {title} field must be declined when {other} is {value}.',
		'different' => 'The {title} field and {other} must be different.',
		'digits' => 'The {title} field must be {digits} digits.',
		'digits_between' => 'The {title} field must be between {min} and {max} digits.',
		'dimensions' => 'The {title} field has invalid image dimensions.',
		'distinct' => 'The {title} field has a duplicate value.',
		'doesnt_end_with' => 'The {title} field must not end with one of the following: {values}.',
		'doesnt_start_with' => 'The {title} field must not start with one of the following: {values}.',
		'email' => 'The {title} field must be a valid email address.',
		'ends_with' => 'The {title} field must end with one of the following: {values}.',
		'enum' => 'The selected {title} is invalid.',
		'exists' => 'The selected {title} is invalid.',
		'extensions' => 'The {title} field must have one of the following extensions: {values}.',
		'file' => 'The {title} field must be a file.',
		'filled' => 'The {title} field must have a value.',
		'gt' => [
			'array' => 'The {title} field must have more than {value} items.',
			'file' => 'The {title} field must be greater than {value} kilobytes.',
			'numeric' => 'The {title} field must be greater than {value}.',
			'string' => 'The {title} field must be greater than {value} characters.',
		],
		'gte' => [
			'array' => 'The {title} field must have {value} items or more.',
			'file' => 'The {title} field must be greater than or equal to {value} kilobytes.',
			'numeric' => 'The {title} field must be greater than or equal to {value}.',
			'string' => 'The {title} field must be greater than or equal to {value} characters.',
		],
		'hex_color' => 'The {title} field must be a valid hexadecimal color.',
		'image' => 'The {title} field must be an image.',
		'in' => 'The selected {title} is invalid.',
		'in_array' => 'The {title} field must exist in {other}.',
		'integer' => 'The {title} field must be an integer.',
		'ip' => 'The {title} field must be a valid IP address.',
		'ipv4' => 'The {title} field must be a valid IPv4 address.',
		'ipv6' => 'The {title} field must be a valid IPv6 address.',
		'json' => 'The {title} field must be a valid JSON string.',
		'lowercase' => 'The {title} field must be lowercase.',
		'lt' => [
			'array' => 'The {title} field must have less than {value} items.',
			'file' => 'The {title} field must be less than {value} kilobytes.',
			'numeric' => 'The {title} field must be less than {value}.',
			'string' => 'The {title} field must be less than {value} characters.',
		],
		'lte' => [
			'array' => 'The {title} field must not have more than {value} items.',
			'file' => 'The {title} field must be less than or equal to {value} kilobytes.',
			'numeric' => 'The {title} field must be less than or equal to {value}.',
			'string' => 'The {title} field must be less than or equal to {value} characters.',
		],
		'mac_address' => 'The {title} field must be a valid MAC address.',
		'max' => [
			'array' => 'The {title} field must not have more than {max} items.',
			'file' => 'The {title} field must not be greater than {max} kilobytes.',
			'numeric' => 'The {title} field must not be greater than {max}.',
			'string' => 'The {title} field must not be greater than {max} characters.',
		],
		'max_digits' => 'The {title} field must not have more than {max} digits.',
		'mimes' => 'The {title} field must be a file of type: {values}.',
		'mimetypes' => 'The {title} field must be a file of type: {values}.',
		'min' => [
			'array' => 'The {title} field must have at least {min} items.',
			'file' => 'The {title} field must be at least {min} kilobytes.',
			'numeric' => 'The {title} field must be at least {min}.',
			'string' => 'The {title} field must be at least {min} characters.',
		],
		'min_digits' => 'The {title} field must have at least {min} digits.',
		'missing' => 'The {title} field must be missing.',
		'missing_if' => 'The {title} field must be missing when {other} is {value}.',
		'missing_unless' => 'The {title} field must be missing unless {other} is {value}.',
		'missing_with' => 'The {title} field must be missing when {values} is present.',
		'missing_with_all' => 'The {title} field must be missing when {values} are present.',
		'multiple_of' => 'The {title} field must be a multiple of {value}.',
		'not_in' => 'The selected {title} is invalid.',
		'not_regex' => 'The {title} field format is invalid.',
		'numeric' => 'The {title} field must be a number.',
		'password' => [
			'letters' => 'The {title} field must contain at least one letter.',
			'mixed' => 'The {title} field must contain at least one uppercase and one lowercase letter.',
			'numbers' => 'The {title} field must contain at least one number.',
			'symbols' => 'The {title} field must contain at least one symbol.',
			'uncompromised' => 'The given {title} has appeared in a data leak. Please choose a different {title}.',
		],
		'present' => 'The {title} field must be present.',
		'present_if' => 'The {title} field must be present when {other} is {value}.',
		'present_unless' => 'The {title} field must be present unless {other} is {value}.',
		'present_with' => 'The {title} field must be present when {values} is present.',
		'present_with_all' => 'The {title} field must be present when {values} are present.',
		'prohibited' => 'The {title} field is prohibited.',
		'prohibited_if' => 'The {title} field is prohibited when {other} is {value}.',
		'prohibited_unless' => 'The {title} field is prohibited unless {other} is in {values}.',
		'prohibits' => 'The {title} field prohibits {other} from being present.',
		'regex' => 'The {title} field format is invalid.',
		'required' => 'The {title} field is required.',
		'required_array_keys' => 'The {title} field must contain entries for: {values}.',
		'required_if' => 'The {title} field is required when {other} is {value}.',
		'required_if_accepted' => 'The {title} field is required when {other} is accepted.',
		'required_unless' => 'The {title} field is required unless {other} is in {values}.',
		'required_with' => 'The {title} field is required when {values} is present.',
		'required_with_all' => 'The {title} field is required when {values} are present.',
		'required_without' => 'The {title} field is required when {values} is not present.',
		'required_without_all' => 'The {title} field is required when none of {values} are present.',
		'same' => 'The {title} field must match {other}.',
		'size' => [
			'array' => 'The {title} field must contain {size} items.',
			'file' => 'The {title} field must be {size} kilobytes.',
			'numeric' => 'The {title} field must be {size}.',
			'string' => 'The {title} field must be {size} characters.',
		],
		'starts_with' => 'The {title} field must start with one of the following: {values}.',
		'string' => 'The {title} field must be a string.',
		'timezone' => 'The {title} field must be a valid timezone.',
		'unique' => 'The {title} has already been taken.',
		'uploaded' => 'The {title} failed to upload.',
		'uppercase' => 'The {title} field must be uppercase.',
		'url' => 'The {title} field must be a valid URL.',
		'ulid' => 'The {title} field must be a valid ULID.',
		'uuid' => 'The {title} field must be a valid UUID.',

		/*
		|--------------------------------------------------------------------------
		| Custom Validation Language Lines
		|--------------------------------------------------------------------------
		|
		| Here you may specify custom validation messages for attributes using the
		| convention "attribute.rule" to name the lines. This makes it quick to
		| specify a specific custom language line for a given attribute rule.
		|
		*/

		'custom' => [
			'attribute-name' => [
				'rule-name' => 'custom-message',
			],
		],

		/*
		|--------------------------------------------------------------------------
		| Custom Validation Attributes
		|--------------------------------------------------------------------------
		|
		| The following language lines are used to swap our attribute placeholder
		| with something more reader friendly such as "E-Mail Address" instead
		| of "email". This simply helps us make our message more expressive.
		|
		*/

		'attributes' => [],
	],
];
