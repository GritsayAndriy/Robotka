<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Model;

abstract class JsonRepository implements RepositoryInterface
{
    protected string $modelName;

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function find(int $id): ?Model
    {
        $records = json_decode(file_get_contents($this->filePath), true);
        foreach ($records as $record) {
            if ($record['id'] == $id) {
                return $this->modelName::transformToModel($record);
            }
        }
        return null;
    }

    public function create(Model $model): ?Model
    {
        $storage = file_get_contents($this->filePath);
        $oldStorage = json_decode($storage, true);
        if (is_null($oldStorage)) {
            $model->setId(1);
        } else {
            $lastRecord = array_pop($oldStorage);
            $oldStorage[] = $lastRecord;
            $model->setId($lastRecord['id'] + 1);
        }

        $oldStorage[] = $model->toStorage();
        file_put_contents($this->filePath, json_encode($oldStorage));

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