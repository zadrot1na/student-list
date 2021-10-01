<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/config.php';

use Bramus\Router\Router;
use JamieCressey\SessionHandler\SessionHandler;
use App\Controller;

$handler = new SessionHandler();



/** @var string $PDO */
//$dbConfig = $PDO;
$handler->setDbDetails($PDO['host'], $PDO['user'], $PDO['password'], $PDO['dbname']);
$handler->setDbTable('sessions');
session_set_save_handler($handler, true);

$router = new Router();
require __DIR__ . '/../config/routers.php';



$router->run();



//session_start();





