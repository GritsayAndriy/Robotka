<?php

use App\Controllers\Employer\Auth\LoginController;
use App\Controllers\Employer\Auth\RegistrationController;
use App\Controllers\Employer\DashboardController;
use App\Controllers\Employer\VacancyController;

return [
    '/employer/registration' => [
        'get' => [
            'controller' => RegistrationController::class,
            'method' => 'showForm',
        ],
        'post' => [
            'controller' => RegistrationController::class,
            'method' => 'register',
        ],
    ],
    '/employer/login' => [
        'get' => [
            'controller' => LoginController::class,
            'method' => 'showForm',
        ],
        'post' => [
            'controller' => LoginController::class,
            'method' => 'login',
        ],
    ],

    '/employer/dashboard' => [
        'get' => [
            'controller' => DashboardController::class,
            'method' => 'index'
        ]
    ],

    '/employer/vacancies' => [
        'get' => [
            'controller' => VacancyController::class,
            'method' => 'index'
        ],
    ],
    '/employer/vacancies/create' => [
        'get' => [
            'controller' => VacancyController::class,
            'method' => 'create'
        ],
        'post' => [
            'controller' => VacancyController::class,
            'method' => 'store'
        ]
    ]
];
