<?php

class UserController{
    private $model;
    private $view;
    
    //Contructor
    function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();

    }
    function showUsers(){
        $this->logHelper->checkAdminLogIn();
        $users = $this->model->getUsers();
        $this->view->showUserList($users);
    }

    function delUser($id){
        $this->logHelper->checkAdminLogIn();
        $this->model->deleteUser($id);
        $this->view->showUserPage();
    }

    
}