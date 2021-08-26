<?php

//$router->setNamespace('\App\Controller');

/** @var Bramus\Router\Router $router */
$router->get('/', '\App\Controller\StudentController@showStudents');
$router->get('/register', '\App\Controller\AuthController@registerTemplate');
$router->post('/register', '\App\Controller\AuthController@registerHandler');
$router->get('/login', '\App\Controller\AuthController@loginTemplate');
$router->post('/login', '\App\Controller\AuthController@loginHandler');
$router->get('/remove','\App\Controller\StudentController@remove');
$router->get('/edit','\App\Controller\StudentController@edit');

//$router->match('GET|POST', '/register.html', '\App\Controller\StudentController@create');