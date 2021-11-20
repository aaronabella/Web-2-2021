<?php

class UserModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }

    function getUser($userName){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
        $query->execute([$userName]);
        return $query->fetch(PDO::FETCH_OBJ);
        
    }

    function registerUser($userName, $password){
       $query = $this->db->prepare('INSERT INTO usuarios (username, password) VALUES (? , ?)');
       $query->execute([$userName, $password]);
    }

    


}
