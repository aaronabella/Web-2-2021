<?php

class DropsModel{
    private $db;

    //Constructor
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }

    function getProducts(){
        $query = $this->db->prepare( "select * from zapatillas");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    } 

    function addProduct($marca,$modelo,$estilo,$precio,$stock){
        $query = $this->db->prepare("INSERT INTO zapatillas(Marca, Modelo, Estilo, Precio, Stock) VALUES(?, ?, ?, ?, ?)");
        $query->execute(array($marca,$modelo,$estilo,$precio,$stock));

    }

    function delProduct($id){
        $sentencia = $this->db->prepare("DELETE FROM zapatillas WHERE id_zapatilla=?");
        $sentencia->execute(array($id));
    }
    function getSneakers($id){

        $query = $this->db->prepare( "select * from zapatillas WHERE id_zapatilla=?");
        $query->execute(array($id));
        $zapatilla = $query->fetch(PDO::FETCH_OBJ);
        return $zapatilla;

    }

    function updateProduct($updAct, $id){
        $query = $this->db->prepare("UPDATE zapatillas SET Stock=$updAct WHERE id_zapatilla=?");
        $query->execute(array($id));

    }


}