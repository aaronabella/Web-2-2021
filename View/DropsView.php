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
            $this->smarty->assign('admin', $_SESSION['admin']);
            $this->smarty->assign('logged', $_SESSION['logged']);
            $this->smarty->assign('username', $_SESSION['username']);     
        }
        
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/DropsList.tpl'); 
        
    }
     
    function showProduct($sneaker, $nextProducts, $prevProducts, $comentarios){
        session_start();
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            $this->smarty->assign('admin', $_SESSION['admin']);
            $this->smarty->assign('usuario', $_SESSION['userID']);     
        }
        $this->smarty->assign('nextProduct', $nextProducts);
        $this->smarty->assign('prevProduct', $prevProducts);
        $this->smarty->assign('sneaker', $sneaker);
        $this->smarty->assign('comentarios',$comentarios);
        $this->smarty->display('templates/product.tpl');

    }
    
    function showLogin(){
        $this->smarty->display('templates/login.tpl');
    }

    function showSneaker($id){
        header("Location: ".BASE_URL."dropProduct/".$id);
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

    function showComments(){
        $this->smarty->display('templats/comentarios.tpl');
    }

}