<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController {

    private $model;
    private $view;

    //Contructor
    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
    }


    //USER= admin
    //PASSWORD= admin123

    function showLogin(){
        $this->view->showLogin();
    }

    function dropsLogout(){
        session_start();
        session_destroy();
        $this->view->showHome();
    }

    function dropsLogin(){
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $userName = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->model->getUser($userName);

            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["logged"] = true;
                $_SESSION["username"] = $userName;
                
                $this->view->showHome();
            } else {
                $_SESSION["logged"] = false;
                $this->view->showLogin();
            }
        }
    }

}
