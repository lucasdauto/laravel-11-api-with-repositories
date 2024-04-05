<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface UserRepositoryInterface {

    public function find(int $id): Model;
    public function paginate(int $perPage);
    public function create(array $data): Model;
    public function update(array $data, int $id): Model;
    public function getModel(): string;

}
