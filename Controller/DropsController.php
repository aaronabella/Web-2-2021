<?php
require_once "./Model/DropsModel.php";
require_once "./View/DropsView.php";
require_once "./Helper/logHelper.php";
require_once "./Model/BrandModel.php";
require_once "./Model/CommentsModel.php";

class DropsController{

    private $dropsModel;
    private $brandModel;
    private $view;
    private $logHelper;

    //Constructor
    function __construct(){
        $this->dropsModel = new DropsModel();
        $this->brandModel = new BrandModel();
        $this->commentsModel = new commentsModel;
        $this->view = new DropsView();
        $this->logHelper = new logHelper();
    }
    //Ver Productos
    function showProducts(){
        $products = $this->dropsModel->getProducts();
        $marcas=$this->brandModel->getMarcas();    
        $this->view->showProducts($marcas, $products);
    }

    //Ver Productos por Filtro
    function showProductsFilter($id){
        $products = $this->dropsModel->getProductsFilter($id);
        $marcas=$this->brandModel->getMarcas();
        $this->view->showProducts($marcas, $products);
    }
    
    //Ver Producto Individual
    function dropProduct($id){
        $nextProduct = $this->dropsModel->getNextSneakers($id);
        $prevProduct = $this->dropsModel->getPrevSneakers($id);
        $sneaker = $this-> dropsModel-> getSneakers($id);
        $comentarios = $this->commentsModel-> getCommentsSneakers($id);
        $this->view->showProduct($sneaker, $nextProduct, $prevProduct, $comentarios); 
    }

    //Controller de Productos

    function addProduct(){
        if ($this->logHelper->checkAdminLogIn()) {
            if(!isset($_POST['stock'])){
                $stock = 0;
            }else{
                $stock = 1;
        }
            $this->dropsModel->addProduct($_POST['Marca'], $_POST['Modelo'],$_POST['Precio'], $stock);
            $this->view->showHome(); 
        }
        
        
    }

    function delProduct($id){
        if ($this->logHelper->checkAdminLogIn()) {
            $this->dropsModel->delProduct($id);
            $this->view->showHome();
        }
    }

    function updateProduct($updAct, $id){
        if ($this->logHelper->checkAdminLogIn()) {
            if ($updAct=="addStock") {
                $updAct=1;
            }
            else{
                $updAct=0;
            }
            $this->dropsModel->updateProduct($updAct, $id);
            $this->view->showHome();
        }

    }

    function addImage($id){
        if ($this->logHelper->checkAdminLogIn()) {
            if($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png" ) {
                $this->dropsModel->addImage($_FILES['input_name']['tmp_name'], $id);
            }
        }
        $this->view->showSneaker($id);
    }


}