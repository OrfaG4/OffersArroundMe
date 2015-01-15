<?php 
    class Register extends ControllerDAO{
       
        public function index(){
            $this->view('templates/header');
            $this->view('register/index');
            $this->view('templates/footer');
        }
        
        public function regUser(){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $type = $_POST['type'];
            
            $userModel = $this->model('UserDAO');
            $registerResult = $userModel->register($username, $password, $email, $type);
            
            if($registerResult){
                $this->view('templates/header');
                $this->view('login/index');
                $this->view('templates/footer');
            }else{
                $this->view('templates/header');
                $this->view('register/registerFailed');
                $this->view('templates/footer');
            }
         
        }
    }
?>