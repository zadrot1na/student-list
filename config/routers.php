<?php

//$router->setNamespace('\App\Controller');

$router->get('', '\App\Controller\StudentController@all');
$router->get('/register', '\App\Controller\StudentController@create'); //"TODO" route to register

//$router->match('GET|POST', '/register.html', '\App\Controller\StudentController@create');
