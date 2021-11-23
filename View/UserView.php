<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class UserView{
    private $smarty;

    //Constructor
    function __construct() {
        $this->smarty = new Smarty();
    }

    function showUserPage(){
        header("Location: ".BASE_URL."userlist");
    }

    function showUserList($users){
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
            $this->smarty->assign('admin', $_SESSION['admin']);
            $this->smarty->assign('logged', $_SESSION['logged']);
            $this->smarty->assign('username', $_SESSION['username']);
            $this->smarty->assign('userID', $_SESSION['userID']);      
        }
        $this->smarty->assign('usuarios', $users);
        $this->smarty->display('templates/usuarios.tpl');

    }

}