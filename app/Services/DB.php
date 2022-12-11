<?php

declare(strict_types=1);

namespace App\Services;

class DB
{
    private ?\PDO $pdo = null;

    public function getConnection(): \PDO
    {
        if (is_null($this->pdo)) {
            $this->pdo = new \PDO(
                'mysql:host=' . $_ENV['MYSQL_HOST']
                . ';dbname=' . $_ENV['MYSQL_DB'],
                $_ENV['MYSQL_USER'],
                $_ENV['MYSQL_PASSWORD']
            );
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->pdo;
    }
}