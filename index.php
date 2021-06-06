<?php
include_once 'config/init.php';

require('router.php');
require('request.php');
require('dispatcher.php');

$dispatch = new Dispatcher();
$dispatch->dispatch();

?>