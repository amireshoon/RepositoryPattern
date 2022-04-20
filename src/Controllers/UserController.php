<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Repositories\UserRepository;

class UserController extends Controller {

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function index() {
        // Handle request with a response
    }
}