<?php

return [
	'global' => [
		'value' => '{Theme}',
		'options' => [
			'menu' => [
				'title' => 'Menu',
				'description' => 'Controls which side of the screen the sidebar menu will be on.',
				'values' => [
					'right' => 'Right',
					'left' => 'Left',
				],
			],
		],
	],
	'legacy' => [
		'name' => 'Classic',
		'options' => [
			'scheme' => [
				'title' => 'Scheme',
				'value' => '{Scheme}',
			],
		],
	],
	'smwc2' => [
		'name' => 'SMWC2',
		'options' => [
			'scheme' => [
				'title' => 'Scheme',
				'values' => [
					'default' => 'Default',
					'original' => 'Rust',
					'classic' => '2006 Nostalgia',
					'darkblue' => 'Dark Blue',
					'ambiance' => 'Ambiance',
					'doomsday' => 'Doomsday',
					'rain' => 'Rain',
					'frappe' => 'Frappe',
					'mocha' => 'Mocha',
					'hotdogstand' => 'Hotdog Stand',
					'c3w2023' => '[C3] Mario Party',
					'dreamhouse' => '[C3] Dream House',
					'c3s2024' => '[C3] SMWCities',
				],
			],
			'color' => [
				'title' => 'Color Mode',
				'description' => 'For site schemes that support it, set the color mode preference.',
				'values' => [
					'system' => 'Use device default',
					'light' => 'Light mode',
					'dark' => 'Dark mode',
				],
			],
		],
	],
];
