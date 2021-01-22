<?php
require __DIR__ . '/../vendor/autoload.php';
$handler = new \JamieCressey\SessionHandler\SessionHandler();
$handler->setDbDetails('mysql','root','symfony','students');
$handler->setDbTable('sessions');
session_set_save_handler($handler, true);


$router = new \Bramus\Router\Router();
require_once __DIR__ . '/../config/routers.php';

require_once __DIR__ . '/../config/config.php';


session_start([]);
$router->run();





