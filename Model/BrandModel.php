<?php

class BrandModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }

    function getMarcas(){
        $query = $this->db->prepare( "select * from marcas");
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
    }

    //Controlador de Marcas
    function addMarca($marca){
        $query = $this->db->prepare("INSERT INTO marcas(Nombre) VALUE(?)");
        $query->execute(array($marca));

    }

    function delMarca($id){
        $query = $this->db->prepare("DELETE from marcas WHERE id_marca=?");
        $query->execute(array($id));
    }

    function updateMarca($newName, $id){
        $query = $this->db->prepare("UPDATE marcas SET Nombre= '$newName' WHERE id_marca=?");
        $query->execute(array($id));
    }
}