<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';
class ApiView{
    
    public function response($data, $status) {




    }

    private function _requestStatus($code){
        $status= array(
            200=> "OK";
            404=> "Not Found";
            500=> "Internal Server Error";


            return (isset($status[$code]))? $status[$code] : $status[];

        )
    }

}