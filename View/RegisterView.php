<?php
class RegisterView{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showRegister(){   
        $this->smarty->display('templates/register.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }
}