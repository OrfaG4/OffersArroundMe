<?php
session_start();
class UserSide extends ControllerDAO{
    public function index(){
        $userSideOffersDAOmodel = $this->model('UserSideOffersDAO');
        $allOffers = $userSideOffersDAOmodel->showAllOffers();
        
        $this->view('templates/header');
        $this->view('userSide/index', array("allOffers"=>$allOffers));
        $this->view('templates/footer');
    }
    public function seeStoreOwner(){
        $uid = $_POST['id'];
        
        $userSideOffersDAOmodel = $this->model('UserSideOffersDAO');
        $ownerDetails = $userSideOffersDAOmodel->showOwner($uid);
        $comments = $userSideOffersDAOmodel->showComments($uid);
        
        $this->view('templates/header');
        $this->view('userSide/showStoreOwners', array("ownerDetails"=>$ownerDetails,"comments"=>$comments));
        $this->view('templates/footer');
    }
    
    public function makeComment(){
        $uid = $_POST['uid'];
        $comment = $_POST['comment'];
       
        $userSideOffersDAOmodel = $this->model('UserSideOffersDAO');
        $commentSender = $userSideOffersDAOmodel->uploadComment($uid, $comment);
        if($commentSender){
            echo"<META http-equiv='refresh' content='0;URL=http://localhost/mvc/public/userSide/showStoreOwners'>";
        }
    }
}
?>