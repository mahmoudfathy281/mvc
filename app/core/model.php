<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;


class model{
    static function db(){
        $options = [
            // required
            'username'  => USERNAME,
            'database'  => DATABASE,
            // optional
            'password'  => PASSWORD,
            'type'      => DATABASE_TYPE,
            'charset'   => DATABASE_CHARSET,
            'host'      => SERVER,
            'port'      => DATABASE_PORT
        ];
        return $db = new Database($options);
    }
}