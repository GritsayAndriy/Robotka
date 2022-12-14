<?php

use App\Controllers\Applicant\Auth\LoginController;
use App\Controllers\Applicant\Auth\LogoutController;
use App\Controllers\Applicant\Auth\RegistrationController;
use App\Controllers\Applicant\DashboardController;
use App\Controllers\HomeController;

return [
    '/' => [
        'get' => [
            'controller' => HomeController::class,
            'method' => 'home',
        ],
    ],
    '/login' => [
        'get' => [
            'controller' => LoginController::class,
            'method' => 'showForm'
        ],
        'post' => [
            'controller' => LoginController::class,
            'method' => 'login'
        ]
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
    '/logout' => [
        'get' => [
            'controller' => LogoutController::class,
            'method' => 'logout',
        ],
    ],
    '/dashboard' => [
        'get' => [
            'controller' => DashboardController::class,
            'method' => 'index',
        ]
    ]
];