<?php

declare(strict_types=1);

if (!function_exists('config')) {
    function config(string $name, string $key)
    {
        return (include($_SERVER['DOCUMENT_ROOT'] . '/configs/'. $name . '.php'))[$key];
    }
}

if (!function_exists('db_path')) {
    function db_path()
    {
        return $_SERVER['DOCUMENT_ROOT'] . '/db';
    }
}