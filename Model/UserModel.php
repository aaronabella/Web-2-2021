<?php

class UserModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }

    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM usuarios');
        $query->execute();
        $users= $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
        
    }

    function registerUser($userName, $password){
       $query = $this->db->prepare('INSERT INTO usuarios (username, password) VALUES (? , ?)');
       $query->execute([$userName, $password]);
    }

    function deleteUser($userID){
        $query = $this->db->prepare("DELETE from usuarios WHERE id_user=?");
        $query->execute(array($userID));
    }

    function updateUser($updAdm, $id){
        $query = $this->db->prepare("UPDATE usuarios SET admin_user=? WHERE id_user=?");
        $query->execute(array($updAdm, $id));

    }


}
