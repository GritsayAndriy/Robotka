<?php

declare(strict_types=1);

namespace App\Repositories;

interface RepositoryInterface
{
    public function findAll();

    public function find();

    public function update();

    public function delete();
}