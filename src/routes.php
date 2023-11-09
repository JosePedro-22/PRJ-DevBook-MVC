<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/login', 'LoginController@login');
$router->get('/cadastro', 'LoginController@cadastro');