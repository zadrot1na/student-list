<?php

//$router->setNamespace('\App\Controller');

$router->get('/', '\App\Controller\StudentController@showStudents');
$router->get('/register', '\App\Controller\StudentController@registerTemplate');
$router->post('/register', '\App\Controller\StudentController@registerHandler');
$router->get('/login', '\App\Controller\StudentController@loginTemplate');
$router->post('/login', '\App\Controller\StudentController@loginHandler');
$router->get('/remove','\App\Controller\StudentController@remove');
$router->get('/edit','\App\Controller\StudentController@edit');

//$router->match('GET|POST', '/register.html', '\App\Controller\StudentController@create');