<?php
/** @var Bramus\Router\Router $router */
$router->setNamespace('\App\Controller');

$router->get('/', 'StudentController@showStudents');
$router->get('/register', 'AuthController@registerTemplate');
$router->post('/register', 'AuthController@registerHandler');
$router->get('/login', 'AuthController@loginTemplate');
$router->post('/login', 'AuthController@loginHandler');
$router->get('/remove','StudentController@remove');
$router->get('/edit','StudentController@edit');

//$router->match('GET|POST', '/register.html', '\App\Controller\StudentController@create');