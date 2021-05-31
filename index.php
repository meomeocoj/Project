<?php

include_once 'config/init.php';
include_once 'model/hotel.php';

// $hotel = new Hotel;
// $template = new Template('view/frontpage/frontpage.php');

// $template->title = 'Latest jobs';
// $template->hotels = $hotel->getAllHotels();
// echo $template;
// echo $_SERVER["REQUEST_URI"].'<br>';

// echo $_SERVER["SCRIPT_NAME"].'<br>';
// echo $_SERVER["SCRIPT_FILENAME"].'<br>';
// define('WEBROOT', str_replace("/Project/index.php", "", $_SERVER["SCRIPT_NAME"]));
// define('ROOT', str_replace("Project/index.php", "", $_SERVER["SCRIPT_FILENAME"]));
// echo WEBROOT.'<br>';
// echo ROOT.'<br>';

// require(ROOT . 'Config/core.php');

require('router.php');
require('request.php');
require('dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();



//call the method function __toString()
//already include frontpage.php <?echo smt 
?>