<?php

return [
    'phwoolcon/theme-mdc' => [
        'di'     => [
            20 => 'widgets.php',
        ],
        'assets' => [
            'mdc-css' => [
                'normalize/normalize-7.0.0.min.css',
                'material-components-web-0.20.0/material-components-web.min.css',
                'phwoolcon-mdc/mdc-fix.css',
                'material-icons/material-icons.css',
            ],
            'mdc-js'  => [
                'material-components-web-0.20.0/material-components-web.min.js',
                'phwoolcon-mdc/mdc-fix.js',
            ],
        ],
    ],
];
