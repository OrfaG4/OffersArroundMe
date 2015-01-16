
<?php
    session_start(); 
    class Contact extends ControllerDAO{
	public function index(){
            $this->view('templates/header');
            $this->view('contact/index');
            $this->view('templates/footer');
            
        }
        
        public function submit(){
            $uid = $_POST['uid'];
            $reason = $_POST['reason'];
            $comment = $_POST['comment'];
            $sql = "INSERT INTO opinions (user_id, reason, comment) VALUES('$uid', '$reason', '$comment')";
            
            $userSideModel = $this->model('UserSideOffersDAO');
            $userSideModel->uploadOpinion($uid, $reason, $comment, $sql);
            
            $this->view('templates/header');
            $this->view('contact/thanksForContact');
            $this->view('templates/footer');
        }
    }
