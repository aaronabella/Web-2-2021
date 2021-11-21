<?php

class logHelper{

    function __construct(){
    }

    function checkLogIn(){
        session_start();
        if(!isset($_SESSION["logged"])){
            header("Location: ".BASE_URL."login");
        }
    }

    function checkAdminLogIn(){
        session_start();
        if(!isset($_SESSION["logged"])|| $_SESSION["admin"]=true){
            session_destroy();
            header("Location: ".BASE_URL."login");
        }
        
    }

}
