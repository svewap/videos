<?php
defined('TYPO3_MODE') or die();


$newSysFileReferenceColumns = [
    'track_language' => [
        'label' => 'LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_language',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => [
                ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages', -1],
                ['LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0]
            ],
            'default' => 0,
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ]
    ],
    'track_type' => [
        'label' => 'LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_type.subtitles', 'subtitles'],
                ['LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_type.captions', 'captions'],
                ['LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_type.descriptions', 'descriptions'],
                ['LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_type.chapters', 'chapters'],
                ['LLL:EXT:videos/Resources/Private/Language/locallang_be.xlf:track_type.metadata', 'metadata']
            ],
            'default' => 'subtitles',
        ]
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $newSysFileReferenceColumns);

