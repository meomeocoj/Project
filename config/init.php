<?php
// DB params
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "hotelbooking");

function my_autoloader($class) {
    include 'lib/' . $class . '.php';
}

spl_autoload_register('my_autoloader');
?>