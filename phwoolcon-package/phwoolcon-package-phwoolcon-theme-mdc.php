<?php

return [
    'phwoolcon/theme-mdc' => [
        'di' => [
            20 => 'di.php', // 20 stands for the loading sequence, bigger number will be loaded later
        ],
        'commands' => [
            // 20 stands for the loading sequence, bigger number will be loaded later
            20 => [
//                'your:command' => Phwoolcon\ThemeMdc\Command\YourCommand::class,
            ],
        ],
        'class_aliases' => [
            // 20 stands for the loading sequence, bigger number will be loaded later
            20 => [
//                'ShortClass' => Phwoolcon\ThemeMdc\Some\LongClassName::class,
            ],
        ],
        'assets' => [
            'mdc-css' => [
                'mdc-0.20.0/mdc.css',
            ],
            'mdc-js' => [
                'mdc-0.20.0/mdc.min.js',
            ],
        ],
    ],
];
