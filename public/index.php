<?php
require __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;
use JamieCressey\SessionHandler\SessionHandler;


$handler = new SessionHandler();

require_once __DIR__ . '/../config/config.php';

/** @var string $PDO */
$dbConfig = $PDO;
$handler->setDbDetails($PDO['localhost'], $PDO['root'], $PDO['password'], $PDO['database']);
$handler->setDbTable($PDO['table']);
session_set_save_handler($handler, true);

$router = new Router();
require_once __DIR__ . '/../config/routers.php';


$router->run();



session_start();





