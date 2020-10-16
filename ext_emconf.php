<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Videos',
	'description' => 'Video player for playlists with cue points, preview image and subtitles',
	'author' => 'Sven Wappler',
	'author_email' => 'typo3@wappler.systems',
	'category' => 'misc',
	'author_company' => 'WapplerSystems',
	'shy' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '0.1.0',
	'constraints' => [
		'depends' => [
			'typo3' => '9.5.20-10.9.99',
            'vhs' => '6.0.0-6.99.99'
        ],
		'conflicts' => [
        ],
		'suggests' => [
        ],
    ],
	'suggests' => [
    ],
];

