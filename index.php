<?php

use function PHPSTORM_META\type;

include_once 'config/init.php'; //we can have many class autoload in this init file
$hotel = new Hotel;
$template = new Template('templates/frontpage.php');
//when a object is initiated from a class, the _autoload function is called

$template->title = 'Latest jobs';
$template->hotels = $hotel->getAllHotels();
echo $template->hotels;
echo $template;


//call the method function __toString()
//already include frontpage.php <?echo smt 
?>