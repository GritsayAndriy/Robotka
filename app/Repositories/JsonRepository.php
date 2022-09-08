<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Model;

abstract class JsonRepository implements RepositoryInterface
{
    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function find()
    {
        // TODO: Implement find() method.
    }

    public function create(Model $model): ?Model
    {
        $storage = file_get_contents($this->filePath);
        $oldStorage = json_decode($storage, true);
        $lastRecord = array_pop($oldStorage);
        if (empty($lastRecord)) {
            $model->setId(1);
        } else {
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