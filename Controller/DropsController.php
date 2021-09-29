<?php
require_once "./Model/DropsModel.php";
require_once "./View/DropsView.php";

class DropsController{

    private $model;
    private $view;

    //Constructor
    function __construct(){
        $this->model = new DropsModel();
        $this->view = new DropsView();
    }

    function showProducts(){

        $this->view->showProducts();
    }
    function showLogin(){
        $this->view->showLogin();
    }

    function dropsLogout(){
        $this->model->dropsLogout();
        $this->view->showHomeLocation();
    }

    function dropsLogin(){
        $this->model->dropsLogin();
        
        $this->view->showHomeLocation();

    }




}