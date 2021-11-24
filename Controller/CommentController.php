<?php
require_once "./Model/DropsModel.php";
require_once "./View/DropsView.php";
require_once "./Helper/logHelper.php";
require_once "./Model/CommentsModel.php";

class CommentController{

    private $dropsModel;
    private $commentsModel;
    private $view;
    private $logHelper;

    function __construct(){
        $this->dropsModel = new DropsModel;
        $this->commentsModel = new CommentsModel();
        $this->view = new DropsView();
        $this->logHelper = new logHelper();
    }

    function get
    function deleteCommentBy(){
        if ($this->logHelper->checkAdminLogIn()) {
            $this->CommentsModel->delComment($id);
            $this->view->showSneakers($sneakerId);
    }
    }

    function addComment(){
        if ($this->logHelper->checkAdminLogIn()) {
            $this->CommentsModel->addComment($_POST['addComment']);
            $this->view->showHome();
        }
    }
    }
    
