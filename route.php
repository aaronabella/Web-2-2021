<?php
require_once "Controller/DropsController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    //DEFAULT
    $action = 'home'; 
}

$params = explode('/', $action);

$dropsController= new DropsController();

switch ($params[0]) {
    case 'home': 
        $dropsController->showProducts(); 
        break;

    case'loginPage':
        $dropsController->showLogin();
        break;

    case 'logout':
        $dropsController->dropsLogout();
        break;
    case 'login':
        $dropsController->dropsLogin();
        break;
    default: 
    echo('404 Page not found'); 
    break;
}