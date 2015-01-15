<?php
    session_start(); 
    class Admin extends ControllerDAO{
        public function index(){
            
            $opinionsModel = $this->model('OpinionsDAO');
            $opinions = $opinionsModel->getAllOpinions("SELECT * FROM opinions");
            
            $this->view('templates/header');
            $this->view('admin/index', array('opinions'=>$opinions,));
            $this->view('templates/footer');
        }
    }
