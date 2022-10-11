<?php

use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//ini_set('include_path', $_SERVER['DOCUMENT_ROOT']);
error_reporting(E_ALL);
session_start();

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

(new Kernel)->registerRoutes()
    ->executeController()
    ->renderResponse();