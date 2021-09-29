<?php

class DropsModel{
    private $db;

    //Constructor
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_gordodrops;charset=utf8', 'root', '');
    }


    function dropsLogin(){
        
        if(!empty($_POST['username'])&& !empty($_POST['password'])){
            $userName=$_POST['username'];
            $userPassword=$_POST['password'];
            
            $query = $this->db->prepare('SELECT * FROM usuarios WHERE username = ?');
            $query->execute([$userName]);
            $user = $query->fetch(PDO::FETCH_OBJ);
        

        if($user && password_verify($userPassword,($user->password))){
            session_start();
            $_SESSION["logged"] = true;
            $_SESSION["username"] = $userName;
                
        }else{
            $_SESSION["logged"] = false;
        }
        
    }
    }

    function dropsLogout(){
        session_start();
        session_destroy();
        
        
    }


}