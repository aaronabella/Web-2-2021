<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiDropsController.php';

$router = new Router():

$router-> addroute();
$router-> addroute();
$router-> addroute();

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);