<?php

use App\Controllers\Applicant\Auth\RegistrationController;
use App\Controllers\HomeController;

return [
    '/' => [
        'get' => [
            'controller' => HomeController::class,
            'method' => 'home',
        ],
    ],
    '/registration' => [
        'get' => [
            'controller' => RegistrationController::class,
            'method' => 'showRegisterForm',
        ],
        'post' => [
            'controller' => RegistrationController::class,
            'method' => 'register',
        ]
    ],
];