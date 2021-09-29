<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class DropsView {
    private $smarty;

    //Constructor
    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts(){
        $this->smarty->display('templates/DropsList.tpl');
    }

    function showLogin(){
        $this->smarty->display('templates/login.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
}