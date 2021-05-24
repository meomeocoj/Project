<?php
// DB params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hotel");

session_start();
require_once 'helpers/system_helper.php';

function my_autoloader($class) {
    include 'lib/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
?>