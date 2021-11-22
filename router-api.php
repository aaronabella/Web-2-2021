<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiDropsController.php';

$router = new Router();

$router-> addroute('zapatillas','GET','ApiDropsController','getProducts');
$router-> addroute('zapatillas/:ID','GET','ApiDropsController','getSneaker');
$router-> addroute('zapatillas/:ID','DELETE''ApiDropsController','deleteSneaker');
$router-> addroute('zapatillas','POST','ApiDropsController','insertSneaker');
$router-> addroute('zapatillas/','PUT','ApiDropsController','editSneaker');
$router-> addroute('marcas','GET','ApiDropsController','getBrands');
$router-> addroute('marcas/:ID','GET','ApiDropsController','getBrand');
$router-> addroute('marcas/:ID','DELETE','ApiDropsController','deleteBrand');
$router-> addroute('marcas/:ID','POST','ApiDropsController','insertBrand');
$router-> addroute('marcas/:ID','PUT','ApiDropsController','editBrand');

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);