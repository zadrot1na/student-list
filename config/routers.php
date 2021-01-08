<?php

//$router->setNamespace('\App\Controller');

$router->get('', '\App\Controller\StudentController@all');
$router->get('/register', '\App\Controller\StudentController@registerTemplate');
$router->post('/register', '\App\Controller\StudentController@registerHandler');
$router->get('/remove','\App\Controller\StudentController@remove');
$router->get('/edit','\App\Controller\StudentController@edit');

//$router->match('GET|POST', '/register.html', '\App\Controller\StudentController@create');
