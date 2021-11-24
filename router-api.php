<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiComentariosController.php';

$router = new Router();


$router-> addroute('comentarios', 'GET', 'APiComentariosController', 'getComments')
$router-> addroute('comentarios/zapatillas/:ID', 'GET', 'ApiCOmentariosController', 'getCommentsSneakers');
$router-> addroute('comentarios/zapatillas/:ID', 'POST', 'ApiComentariosController', 'addSneakersComment');
$router-> addroute('comentarios/zapatillas/:ID', 'DELETE','ApiComentariosController', 'delComment');

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);