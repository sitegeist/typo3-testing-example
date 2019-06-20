<?php
declare(strict_types = 1);

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return [
    'ctrl' => [
        'title' => 'Table of strings',
        'label' => 'string',
    ],
    'columns' => [
        'string' => [
            'exclude' => 1,
            'label' => 'Example string',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 128,
                'eval' => 'required'
            ]
        ]
    ]
];
