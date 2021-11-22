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
private function getBody(){
    $bodyString = file_get_contents("php://input");
    return json_decode($bodyString);
}

function getProducts($params = []) {
    if(empty($params)){
        $zapatillas = $this->model->getProducts();
    return $this->view->response($zapatillas, 200);
    }
    else{
        $zapatilla= $this->model->getSneakers($params[":ID"]);
        if(!empty($zapatilla)){
            return $this->view->response($zapatilla, 200);
        }
        else{
            $this->view->response("La zapatilla no existe", 404);
        }
    }
}

function deleteProduct($params= null){
    $idProduct = $params[":ID"];
    $zapatilla= $this->model->getSneakers($idProduct);
    if($zapatilla){
        $this->model->deleteProduct($idProduct);
        return $this->view->response("La zapatilla ha sido deleteada ashe", 200);
    }
    else{
        return $this->view->response("La zapatilla no existe", 404);
    }
}

function addProduct($params = null){
    $body = $this->getBody();
    $idProduct = $this->model->addProduct($body->marca, $body->modelo, $body->precio, $body->stock);
    if($idProduct !=0){
         $this->view->response("Se agrego el producto", 200);
    }
    else{
        $this->-view->response("No se pudo agregar el producto", 500);
    }
   

}

function updateProduct($params = null){
    $idProduct = $params[":ID"];
    $body = $this->getBody();

    $zapatilla = $this->model->getSneakers($idProduct);
    if($product){
        $this->model->updateProduct($body-> updAct, $body->id);

    }
    else{
        $this->view->response("Este producto no existe", 404);
    }

}

function getMarcas($params = []){
    if(empty($params)){
        $marcas = $this->model->getMarcas();
    return $this->view->response($marcas, 200);
    }
    else{
       return $this->view->response("No se han encontrado las marcas", 404);
        }
    }
}


}
