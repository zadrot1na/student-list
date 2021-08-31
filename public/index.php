<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/config.php';

use Bramus\Router\Router;
use JamieCressey\SessionHandler\SessionHandler;

$handler = new SessionHandler();



/** @var string $PDO */
//$dbConfig = $PDO;
$handler->setDbDetails($PDO['host'], $PDO['user'], $PDO['password'], $PDO['dbname']);
$handler->setDbTable($PDO['table']);
session_set_save_handler($handler, true);

$router = new Router();
require_once __DIR__ . '/../config/routers.php';



$router->run();



session_start();





