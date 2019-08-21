<?php

namespace App\Controllers;

use Exception;

class HelloController extends Controller
{
    public function index()
    {
        return $this->render('hello/index', ['name' => 'php-starter']);
    }

    public function params()
    {
        return $this->request;
    }

    public function go() {
        return $this->redirect('hello/index');
    }

    public function form() {
        return $this->render('hello/form');
    }

    public function formSubmit() {
        $this->shouldBePost();
        $data = $this->request->input;
        $username = $data->username;
        $passwordInDB = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';
        $password = $data->password;
        if (password_vertify($password, $passwordInDB)){
            return 'vertified';
        }
        else {
            return 'incoreect';
        }

        // return $this->render('admin/manageUser', [
        //     'name'=>$data->name
        // ]);        
    }
}