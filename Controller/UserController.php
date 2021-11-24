<?php
require_once "./View/UserView.php";

class UserController{
    private $model;
    private $view;
    private $logHelper;
    
    //Contructor
    function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
        $this->logHelper = new logHelper();

    }
    //Login
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

            $this->login($userName, $password);  
            
        }
    }

    function login($userName, $password){
        $user = $this->model->getUser($userName);

        if ($user && password_verify($password, $user->password)) {

            session_start();
            $_SESSION["logged"] = true;
            $_SESSION["admin"]=$user->admin_user;
            $_SESSION["username"] = $user->username;
            $_SESSION["userID"] = $user->id_user;
            
            $this->view->showHome();
        } else {
            $_SESSION["logged"] = false;
            $this->view->showLogin();
        }
    }

    //Registro
    function showRegister(){
        $this->view->showRegister();
    }

    function dropsRegister(){
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $userName = $_POST['username'];
            $password =$_POST['password'];
            $passwordHash=password_hash($password, PASSWORD_BCRYPT);

            $this->model->registerUser($userName, $passwordHash);
            $this->login($userName, $password);

            
        }

    }

    //control de usuarios
    function showUsers(){
        if ($this->logHelper->checkAdminLogIn()) {
        $users = $this->model->getUsers();
        $this->view->showUserList($users);
        }
    }

    function delUser($id){
        if ($this->logHelper->checkAdminLogIn()&& ($id!=$_SESSION["userID"])) {
        $this->model->deleteUser($id);
        }
        $this->view->showUserPage();
    }

    function updateUser($updAdm, $id){
        if ($this->logHelper->checkAdminLogIn()&& ($id!=$_SESSION["userID"])) {
            if ($updAdm=="giveAdmin") {
                $updAdm=1;
            }
            elseif ($updAdm=="takeAdmin") {
                $updAdm=0;
            }
                
            $this->model->updateUser($updAdm, $id);
            
        }
        $this->view->showUserPage();

    }

    
}