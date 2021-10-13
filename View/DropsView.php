<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class DropsView {
    private $smarty;

    //Constructor
    function __construct() {
        $this->smarty = new Smarty();
    }

    function showProducts($marcas, $products){
        session_start();
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            $this->smarty->assign('logged', $_SESSION['logged']);
            $this->smarty->assign('username', $_SESSION['username']);     
        }
        
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/DropsList.tpl'); 
        
    }
     
    function showProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/product.tpl');

    }

    function showLogin(){
        $this->smarty->display('templates/login.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

}