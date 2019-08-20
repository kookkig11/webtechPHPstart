<?php
namespace App\Controllers;

class AdminController extends Controller {
    public function index(){
        return "AdminController";
    }

    public function hello(){
        return "Welcome Admin";
    }

    public function manageUser () {
        //vardump($this->request->query['q']);
        return $this->render('admin/manageUser', [
            'name' => "Saac",
            'student_code' => "59XXXXXXXX"
        ]);
        //return $this->render('admin/manageUser');
    }
}
?>