<?php

namespace App\Bean;

use App\Repositories\UserRepository;
use App\Models\User;

class UserBean implements UserRepository {

    public function getAll() {
        return [];
    }

    public function getById($id) : User {
        return new User;
    }

    public function create(array $data) {
        return new User;
    }

    public function update($id, array $data) {
        return new User;
    }

    public function delete($id) {
        return true;
    }
    
}