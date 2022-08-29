<?php

use App\Controllers\HomeController;

return [
    '/' => [
        'get' => [
            'controller' => HomeController::class,
            'method' => 'index',
        ],
    ]
];