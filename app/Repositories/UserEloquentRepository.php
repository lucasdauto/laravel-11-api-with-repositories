<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserEloquentRepository implements UserRepositoryInterface {

    /**
     * Find a model by its primary key.
     *
     * @param int $id The primary key of the model.
     * @return Model
     */
    public function find(int $id): Model
    {
        return $this->getModel()::find($id);
    }

    /**
     * paginate function
     *
     * @param int $perPage
     * @return mixed
     */
    public function paginate(int $perPage = 10)
    {
        return $this->getModel()::paginate($perPage);

    }

    /**
     * Create a new model instance and store it in the database.
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->getModel()::create($data);
    }

    /**
     * Update a model with the given data.
     *
     * @param array $data
     * @param int $id
     * @return Model
     */
    public function update(array $data, int $id): Model
    {
        $user = $this->find($id);
        $user->update($data);

        return $user;
    }

    public function delete(int $id): bool
    {
        $user = $this->find($id);
        return $user->delete();
    }

    public function getModel(): string
    {
        return User::class;
    }
}
