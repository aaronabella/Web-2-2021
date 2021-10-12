<?php

class DropsModel{
    private $db;

    //Constructor
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }

    function getProducts(){
        $query = $this->db->prepare( "SELECT zapatillas.*, marcas.Nombre as marca from zapatillas join marcas on zapatillas.id_marca= marcas.id_marca");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function getProductsFilter($filter){
        $query = $this->db->prepare( "SELECT zapatillas.*, marcas.Nombre as marca from zapatillas join marcas on zapatillas.id_marca= marcas.id_marca where zapatillas.id_marca=$filter");
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    

    function addProduct($marca,$modelo,$precio,$stock){
        $query = $this->db->prepare("INSERT INTO zapatillas(id_marca, Modelo, Precio, Stock) VALUES(?, ?, ?, ?)");
        $query->execute(array($marca,$modelo,$precio,$stock));

    }

    function delProduct($id){
        $sentencia = $this->db->prepare("DELETE FROM zapatillas WHERE id_zapatilla=?");
        $sentencia->execute(array($id));
    }
    function getSneakers($id){

        $query = $this->db->prepare( "SELECT zapatillas.*, marcas.Nombre as marca from zapatillas join marcas on zapatillas.id_marca= marcas.id_marca WHERE id_zapatilla=?");
        $query->execute(array($id));
        $zapatilla = $query->fetch(PDO::FETCH_OBJ);
        return $zapatilla;

    }

    function updateProduct($updAct, $id){
        $query = $this->db->prepare("UPDATE zapatillas SET Stock=$updAct WHERE id_zapatilla=?");
        $query->execute(array($id));

    }

    function getMarcas(){
        $query = $this->db->prepare( "select * from marcas");
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
    }
    function addMarca($marca){
        $query = $this->db->prepare("INSERT INTO zapatillas(id_marca) VALUE(?)");
        $query->execute(array($marca));

    }

    function delMarcas(){
        $query = $this->db->prepare("DELETE from zapatillas WHERE id_marca=?");
        $query = $this->execute(array($id));
    }

    function updateMarca($newName, $id){
        $query = $this->db->prepare("UPDATE marcas SET nombre= $newName  WHERE id_marca=?");
        $query->execute(array($id));
    }


}