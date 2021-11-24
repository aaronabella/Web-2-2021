<?php

class CommentsModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }

    function getCommentsSneakers($id){
        $query = $this->db->prepare( "SELECT c.*, u.username AS usuario FROM comentarios c LEFT JOIN usuarios u ON c.id_user = u.id_user WHERE id_zapatilla=?");
        $query->execute(array($id));
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }
    
    function delCommentById($id){
        $query = $this->db->prepare( "DELETE from comentarios WHERE id_comentario=?");
        $query->execute(array($id));

    }

    function addComment($descripcion, $puntuacion, $id_zapatilla, $id_user){
        $query = $this->db->prepare("INSERT INTO comentarios(id_zapatilla,id_user, descripcion, puntuacion) VALUES(?, ?, ?, ?)");
        $query->execute(array($id_zapatilla,$id_user,$descripcion,$puntuacion));
        $id=$this->db->lastInsertID();
        return $query;
    }

    function getComment($id){
        $query = $this->db->prepare( "SELECT from comentarios WHERE id_comentario=?");
        $query->execute(array($id));
        $comment= $query->fetch(PDO::FETCH_OBJ);
        return $comment;
    }
}