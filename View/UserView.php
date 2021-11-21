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

    function showUserList(){

    }

}