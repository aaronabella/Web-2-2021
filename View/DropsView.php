<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class DropsView {
    private $smarty;

    //Constructor
    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($products){
        session_start();
        
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            $this->smarty->assign('logged', $_SESSION['logged']);
            $this->smarty->assign('username', $_SESSION['username']);     
        }
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/DropsList.tpl'); 
        
    }

    function showLogin(){
        $this->smarty->display('templates/login.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

}