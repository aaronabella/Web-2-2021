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