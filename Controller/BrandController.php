<?php
class BrandController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new DropsModel();
        $this->view = new DropsView();
        $this->logHelper = new logHelper();
    }
}