<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Videos',
	'description' => 'Video playlist with cue points',
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
	'version' => '0.0.1',
	'constraints' => [
		'depends' => [
			'typo3' => '8.7.1-8.7.99',
            'filemetadata' => ''
        ],
		'conflicts' => [
        ],
		'suggests' => [
        ],
    ],
	'suggests' => [
    ],
];

