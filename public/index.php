<?php
require __DIR__ . '\..\vendor\autoload.php';

$router = new \Bramus\Router\Router();

require_once __DIR__ . '\..\config\routers.php';

$router->run();

//require_once __DIR__ . '\..\config\config.php';




