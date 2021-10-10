<?php
require_once "./Model/DropsModel.php";
require_once "./View/DropsView.php";
require_once "./Helper/logHelper.php";

class DropsController{

    private $model;
    private $view;

    //Constructor
    function __construct(){
        $this->model = new DropsModel();
        $this->view = new DropsView();
        $this->logHelper = new logHelper();
    }

    function showProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }
    
    function addProduct(){
        if(!isset($_POST['stock'])){
            $stock = 0;
        }else{
            $stock = 1;
        }

        $this->logHelper->checkLogIn();
        $this->model->addProduct($_POST['Marca'], $_POST['Modelo'], $_POST['Estilo'], $_POST['Precio'], $stock);
        $this->view->showHome();

    }

    function delProduct($id){
        $this->logHelper->checkLogIn();
        $this->model->delProduct($id);
        $this->view->showHome();
    }

    function updateProduct($id){
        $this->logHelper->checkLogIn();
        $this->model->updateProduct($id);
        $this->view->showHome();

    }

    function dropProduct($id){
        $product = $this-> model-> getProducts($id);
        $this->view->showProduct($product); 
    }

}