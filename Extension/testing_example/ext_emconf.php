<?php
$EM_CONF['testing_example'] = [
    'title' => 'Testing example',
    'description' => 'Exemplary extension to show how easy it is to start automated testing',
    'category' => 'misc',
    'author' => 'Jan Helke',
    'author_email' => 'helke@sitegeist.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'lockType' => '',
    'author_company' => 'sitegeist media solutions',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
