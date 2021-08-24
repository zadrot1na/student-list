<?php
require __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;
use JamieCressey\SessionHandler\SessionHandler;

$router = new Router();
$handler = new SessionHandler();

//$mysqli = new mysqli

$handler->setDbDetails('localhost', 'root', '', 'students');
$handler->setDbTable('students_list');
session_set_save_handler($handler, true);


require_once __DIR__ . '/../config/routers.php';
$router->run();

require_once __DIR__ . '/../config/config.php';

session_start();





