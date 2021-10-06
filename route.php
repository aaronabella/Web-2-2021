<?php
require_once "Controller/DropsController.php";
require_once "Controller/LoginController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    //DEFAULT
    $action = 'home'; 
}

$params = explode('/', $action);

$dropsController= new DropsController();
$loginController= new LoginController();

switch ($params[0]) {
    case 'home': 
        $dropsController->showProducts(); 
        break;

    case'loginPage':
        $loginController->showLogin();
        break;

    case 'logout':
        $loginController->dropsLogout();
        break;
    case 'login':
        $loginController->dropsLogin();
        break;
    case 'addProduct': 
        $dropsController->addProduct(); 
        break;
    case 'delProduct': 
        $dropsController->delProduct($params[1]); 
        break;
    case 'updateProduct': 
        $dropsController->updateProduct($params[1]); 
        break;
    case 'dropProduct': 
        $dropsController->dropProduct($params[1]); 
        break;
    default: 
    echo('404 Page not found'); 
    break;
}