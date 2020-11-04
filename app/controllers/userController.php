<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\session;
use MVC\models\user;
use Rakit\Validation\Validator;

class userController extends controller{

    public function index(){
        echo 'user';
    }
}