<?php

use App\Controllers\Applicant\DashboardController;
use App\Controllers\Applicant\SummaryController;

return [
    '/applicant/dashboard' => [
        'get' => [
            'controller' => DashboardController::class,
            'method' => 'index',
        ]
    ],
    '/applicant/summaries' => [
        'get' => [
            'controller' => SummaryController::class,
            'method' => 'index',
        ],
    ],
    '/applicant/summaries/create' => [
        'get' => [
            'controller' => SummaryController::class,
            'method' => 'create',
        ],
        'post' => [
            'controller' => SummaryController::class,
            'method' => 'store',
        ],
    ],
    '/applicant/summaries/show' => [
        'get' => [
            'controller' => SummaryController::class,
            'method' => 'show',
        ],
    ],
];