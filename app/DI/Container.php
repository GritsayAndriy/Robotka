<?php

declare(strict_types=1);

namespace App\DI;

use App\Services\DB;

class Container
{
    private static ?Container $instance = null;

    public static function getInstance(): self
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function getDB()
    {
        return new DB();
    }
}