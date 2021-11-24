<?php
require_once "Controller/DropsController.php";
require_once "Controller/LoginController.php";
require_once "Controller/BrandController.php";
require_once "Controller/RegisterController.php";
require_once "Controller/UserController.php";
require_once "Controller/CommentController.php";


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
$brandController= new BrandController();
$registerController= new RegisterController();
$userController= new UserController();
$commentController= new CommentController();

switch ($params[0]) {
    case 'home': 
        $dropsController->showProducts(); 
        break;
    case 'homeFilter': 
        $dropsController->showProductsFilter($params[1]); 
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

    case 'registerPage':
        $registerController->showRegister();
        break;
    case 'register':
        $registerController->dropsRegister();
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