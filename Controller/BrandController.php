<?php
require_once "./View/DropsView.php";
require_once "./Helper/logHelper.php";
require_once "./Model/BrandModel.php";

class BrandController{
    private $brandModel;
    private $view;
    private $logHelper;

    function __construct(){
        $this->brandModel = new BrandModel();
        $this->view = new DropsView();
        $this->logHelper = new logHelper();
    }

    function delMarca(){
        $this->logHelper->checkAdminLogIn();
        if (isset($_POST['marcaDel'])) {
            $id=$_POST['marcaDel'];
            $this->brandModel->delMarca($id);
        } 
        $this->view->showHome();
    }

    function updateMarca(){
        $this->logHelper->checkAdminLogIn();
        if (isset($_POST['marcaUpdate'])) {
            $id=$_POST['marcaUpdate'];
            $this->brandModel->updateMarca($_POST['newName'],$id);
        }
        $this->view->showHome();
    }

    function addMarca(){
        $this->logHelper->checkAdminLogIn();
        $this->brandModel->addMarca($_POST['nuevaMarca']);
        $this->view->showHome();
    }
}