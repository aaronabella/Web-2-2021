<?php 
require_once "./Model/UserModel.php";
require_once "./View/RegisterView.php";

class RegisterController{

    
    private $model;
    private $view;
    private $loginController;
    
    //Contructor
    function __construct(){
        $this->model = new UserModel();
        $this->view = new RegisterView();
        $this->loginController = new LoginController();

    }

    function showRegister(){
        $this->view->showRegister();
    }

    function dropsRegister(){
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $userName = $_POST['username'];
            $password =$_POST['password'];
            $passwordHash=password_hash($password, PASSWORD_BCRYPT);

            $this->model->registerUser($userName, $passwordHash);
            $this->loginController->login($userName, $password);

            
        }

    }

}