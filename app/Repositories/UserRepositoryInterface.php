<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface UserRepositoryInterface {

    public function find(int $id): Model;
    public function paginate(int $perPage = 10);
    public function create(array $data): Model;
    public function update(array $data, int $id): Model;
    public function delete(int $id): bool;
    public function getModel(): string;

}
