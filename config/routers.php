<?php

//$router->setNamespace('\App\Controller');

$router->get('', '\App\Controller\StudentController@all');
$router->get('/show', '\App\Controller\StudentController@show');