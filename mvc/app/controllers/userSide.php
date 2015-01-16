<?php
session_start();
class UserSide extends ControllerDAO{
    public function index(){
        $userSideRecipesDAOmodel = $this->model('UserSideRecipesDAO');
        $allRecipes = $userSideRecipesDAOmodel->showAllRecipes();
        
        $this->view('templates/header');
        $this->view('userSide/index', array("allRecipes"=>$allRecipes));
        $this->view('templates/footer');
    }
    public function seeStoreCook(){
        $uid = $_POST['id'];
        
        $userSideRecipesDAOmodel = $this->model('UserSideRecipesDAO');
        $cookDetails = $userSideRecipesDAOmodel->showCook($uid);
        $message = $userSideRecipesDAOmodel->showmessages($uid);
        
        $this->view('templates/header');
        $this->view('userSide/showStoreCooks', array("cookDetails"=>$cookDetails,"message"=>$message));
        $this->view('templates/footer');
    }
    
    public function makemessage(){
        $uid = $_POST['uid'];
        $message = $_POST['message'];
       
        $userSideRecipesDAOmodel = $this->model('UserSideRecipesDAO');
        $messageSender = $userSideRecipesDAOmodel->uploadmessage($uid, $message);
        if($messageSender){
            echo"<META http-equiv='refresh' content='0;URL=http://localhost/CookBook/public/userSide/showStoreCooks'>";
        }
    }
}
?>