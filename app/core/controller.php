<?php

namespace MVC\core;


use Jenssegers\Blade\Blade;

class controller{

    public function view($path, $params){
        extract($params);
        require_once(VIEWS.$path.".php");
    }
}