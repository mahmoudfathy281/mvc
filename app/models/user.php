<?php

namespace MVC\models;

use MVC\core\model;
use PDO; 

class user extends model{
    public function GetAllUser(){
        $data = model::db()->run("SELECT * FROM user")->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function GetUser($email, $password){
        $data = model::db()->run("SELECT * FROM user WHERE email=? AND password = ?", [$email, $password]);
        return $data;
    }
}