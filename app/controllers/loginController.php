<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\session;
use MVC\models\user;
use Rakit\Validation\Validator;
use MVC\core\helpers;


class loginController extends controller{
    public function login(){
        $this->view('login/login', ['title'=>'login']);
    }
    public function postLogin(){
        $validator = new Validator;
        $validation = $validator->validate($_POST, [
            'email'                 => 'required|email',
        ]);
        if ($validation->fails()) {
            // handling errors
            $errors = $validation->errors();
            echo "<pre>";
            $v = $errors->firstOfAll();
            $this->view('login/login', ['validate' => $v]);
            echo "</pre>";
            exit;

        } else {
            // validation passes
            if($validation == 1){
                $user = new user();
                $data = $user->GetUser($_POST['email'], $_POST['password']);

                session::set('user', $data);
                helpers::redirect('user/index');
            }
        }
    }
    public function logout(){
        session::stop();
    }
}