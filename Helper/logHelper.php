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

}
