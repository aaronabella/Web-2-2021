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
    //Ver Productos
    function showProducts(){
        $products = $this->model->getProducts();
        $marcas=$this->model->getMarcas();    
        $this->view->showProducts($marcas, $products);
    }

    //Ver Productos por Filtro
    function showProductsFilter($id){
        $products = $this->model->getProductsFilter($id);
        $marcas=$this->model->getMarcas();
        $this->view->showProducts($marcas, $products);
    }
    
    //Ver Producto Individual
    function dropProduct($id){
        $product = $this-> model-> getSneakers($id);
        $this->view->showProduct($product); 
    }

    //Controller de Productos

    function addProduct(){
        $this->logHelper->checkLogIn();
        if(!isset($_POST['stock'])){
            $stock = 0;
        }else{
            $stock = 1;
        }
        $this->model->addProduct($_POST['Marca'], $_POST['Modelo'],$_POST['Precio'], $stock);
        $this->view->showHome();
    }

    function delProduct($id){
        $this->logHelper->checkLogIn();
        $this->model->delProduct($id);
        $this->view->showHome();
    }

    function updateProduct($updAct, $id){
        $this->logHelper->checkLogIn();
        if ($updAct=="addStock") {
            $updAct=1;
        }
        else{
            $updAct=0;
        }
        $this->model->updateProduct($updAct, $id);
        $this->view->showHome();

    }

    //Controller de Marcas

    function delMarca(){
        $this->logHelper->checkLogIn();
        if (isset($_POST['marcaDel'])) {
            $id=$_POST['marcaDel'];
            $this->model->delMarca($id);
        } 
        $this->view->showHome();
    }

    function updateMarca(){
        $this->logHelper->checkLogIn();
        if (isset($_POST['marcaUpdate'])) {
            $id=$_POST['marcaUpdate'];
            $this->model->updateMarca($_POST['newName'],$id);
        }
        $this->view->showHome();
    }

    function addMarca(){
        $this->logHelper->checkLogIn();
        $this->model->addMarca($_POST['nuevaMarca']);
        $this->view->showHome();
    }


}