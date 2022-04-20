<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepository {
    public function getAll();
    public function getById($id) : User;
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}