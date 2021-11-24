<?php
require_once "Controller/DropsController.php";
require_once "Controller/BrandController.php";
require_once "Controller/UserController.php";
require_once "Controller/ApiCommentsController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    //DEFAULT
    $action = 'home'; 
}

$params = explode('/', $action);

$dropsController= new DropsController();
$brandController= new BrandController();
$userController= new UserController();
$commentController= new ApiCommentsController();

switch ($params[0]) {
    case 'home': 
        $dropsController->showProducts(); 
        break;
    case 'homeFilter': 
        $dropsController->showProductsFilter($params[1]); 
        break;

    case'loginPage':
        $userController->showLogin();
        break;

    case 'logout':
        $userController->dropsLogout();
        break;

    case 'login':
        $userController->dropsLogin();
        break;

    case 'registerPage':
        $userController->showRegister();
        break;
    case 'register':
        $userController->dropsRegister();
        break;

    case 'addProduct': 
        $dropsController->addProduct(); 
        break;
    case 'delProduct': 
        $dropsController->delProduct($params[1]); 
        break;
    case 'updateProduct': 
        $dropsController->updateProduct($params[1], $params[2]); 
        break;
    case 'uploadImage': 
        $dropsController->addImage($params[1]); 
        break;    
    case 'dropProduct': 
        $dropsController->dropProduct($params[1]); 
        break;
    case 'addMarca':
        $brandController-> addMarca();
        break;
    case 'delMarca':
        $brandController-> delMarca();
        break;
    case 'editMarca':
        $brandController-> updateMarca();
        break;
    case 'userlist':
        $userController-> showUsers();
        break;
    case 'deleteUser':
        $userController-> delUser($params[1]);
        break;
    case 'updateUser':
        $userController-> updateUser($params[1], $params[2]);
        break;
    case 'addComment':
        $commentController->addComment();
        break;
    default: 
    echo('404 Page not found'); 
    break;
}