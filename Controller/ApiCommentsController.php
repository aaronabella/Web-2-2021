<?php
require_once "./Model/DropsModel.php";
require_once "./Model/CommentsModel.php";
require_once "./View/ApiView.php";
require_once "./Helper/logHelper.php";

class ApiCommentsController{

    private $model;
    private $view;
    private $commentsModel;
    private $helper;

    function __construct(){
        $this->model = new DropsModel();
        $this->commentsModel = new CommentsModel();
        $this->view = new ApiView();
        $this->helper= new logHelper();
       
    }


private function getBody(){
    $bodyString = file_get_contents("php://input");
    return json_decode($bodyString);
}


function getCommentsSneakers($params = null){
    $idProduct = $params[":ID"];
    $sneakers = $this->model->getSneakers($idProduct);
    if(!empty($sneakers)){
        $comments= $this->commentsModel->getCommentsSneakers($idProduct);
        return $this->view->response($comments, 200);
        
    }
    else{
        return $this->view->response("No se encontro el producto", 404);
    }

}

function addComment($params= null){
        $id_zapatilla = $params[":ID"];
        $body= $this->getBody();
        $sneakers = $this->model->getSneakers($id_zapatilla	);
        var_dump($body);
        if(!empty($sneakers)){
            if (isset($body->descripcion) && $body->descripcion != "" && isset($body->puntuacion) && $body->puntuacion != ""&& isset($body->id_user) && $body->id_user != "") {
                $id = $this->commentsModel->addComment($body->descripcion, $body->puntuacion, $id_zapatilla, $body->id_user);
                if ($id != 0) {
                    $this->view->response("Se agregro el comentario correctameante", 200);
                } else {
                    $this->view->response("El comentario no se agrego", 500);
                }
            } else {
                $this->view->response("Valores invalidos", 400);
            }
        } else {
            $this->view->response("Zapatillas no encontradas", 404);
        }
}

function delComment($params= null){
        $id_comentario= $params[":ID"];
        $comment= $this->commentsModel->getComment($id_comentario);
        if($comment){
            $this->commentsModel->delCommentById($id_comentario);
            return $this->view->response("El comentario se borro", 200);
        }
        else{
            return $this->view->response("No existe ese comentario", 404);
        }
}
    

}


