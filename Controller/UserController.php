<?php

class UserController{
    private $model;
    private $view;
    
    //Contructor
    function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();

    }
}