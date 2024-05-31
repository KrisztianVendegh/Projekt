<?php

//konštanta DATABASE obsahujúca asoc pole 
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'database',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

session_start();

//require_once('classes/Menu.php');
require_once('classes/Database.php');
//require_once('classes/Contact.php');
require_once('classes/Tabla.php');
//require_once('classes/Portfolio.php');
//require_once('classes/Slider.php');
require_once('classes/User.php');


?>