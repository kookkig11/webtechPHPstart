<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class UsersController extends Controller
{
    public function index()
    {
        $users = (new User())->all();
        return $this->render('users/index', ['users' => $users]);
    }

    public function show()
    {
        if (!isset($this->request->params[0])) {
            throw new Exception('Data Not Found');
        }
        $id = $this->request->params[0];
        $user = (new User())->first($id);
        if (!$user) {
            throw new Exception('Model DAta Not Found');
        }

        return $this->render('users/show', ['user' => $user]);
    }
}