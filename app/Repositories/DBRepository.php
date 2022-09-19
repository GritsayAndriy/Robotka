<?php

declare(strict_types=1);

namespace App\Repositories;

use App\DI\Container;
use App\Models\Model;
use PDO;

abstract class DBRepository implements RepositoryInterface
{
    protected string $tableName;
    protected string $modelName;
    protected \PDO $dbConnection;

    public function __construct()
    {
        $this->dbConnection = Container::getInstance()
            ->getDB()->getConnection();
    }

    public function findAll()
    {
        return;
    }

    public function find(int $id): ?Model
    {
        $statement = $this->dbConnection
            ->prepare("SELECT * FROM $this->tableName WHERE id=:id");
        $statement->bindParam(':id', $id);
        $statement->execute();

        $records = $statement->fetchAll();
        foreach ($records as $record) {
            if ($record['id'] == $id) {
                return $this->modelName::transformToModel($record);
            }
        }
        return null;
    }

    public function create(Model $model): ?Model
    {
        $columns = implode(", ", $model->getFillable());
        $countOfColumns = count($model->getFillable());
        $marksValue = '';
        $values = array_values($model->toStorage());

        for ($i = 1; $i <= $countOfColumns; $i++) {
            if ($i === $countOfColumns){
                $marksValue .= '?';
                continue;
            }
            $marksValue .= '?, ';
        }

        $statement = $this->dbConnection->prepare(
            "INSERT INTO $this->tableName ($columns) VALUES ($marksValue)");

        $statement->execute($values);

        $model->setId((int)$this->dbConnection->lastInsertId());
        return $model;
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

}