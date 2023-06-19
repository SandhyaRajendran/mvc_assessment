<?php

require 'router.php';

$router = new Router();

$router->get('/','view');

$router->post('/create','create');

$router->get('/read','read');

$router->put('/edit','edit');

$router->get('/update','update');

$router->delete('/delete','delete');

$router->router($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);