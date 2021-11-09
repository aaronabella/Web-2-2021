<?php
require_once "./Model/DropsModel.php";
require_once "./View/ApiView.php";

class ApiDropsController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new DropsModel();
        $this->view = new ApiView();
    }

}