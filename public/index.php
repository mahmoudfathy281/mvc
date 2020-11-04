<?php

//directory separator
define("DS", DIRECTORY_SEPARATOR);
// redirect root 
define("ROOT", dirname(__DIR__));

define("APP",ROOT.DS."app".DS);
define("CONFIG",APP.DS."config".DS);
define("CONTROLLERS",APP.DS."controllers".DS);
define("CORE",APP.DS."core".DS);
define("MODELS",APP.DS."models".DS);
define("VIEWS",APP.DS."views".DS);

// config
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'commerce');
define('DATABASE_TYPE', 'mysql');
define('DATABASE_PORT', '3306');
define('DATABASE_CHARSET', 'utf8');
define('DOMAIN_NAME', 'http://mvc.test/');

require_once("../vendor/autoload.php");

$app = new MVC\core\app();