<?php 

	class Logout extends ControllerDAO{
		public function index(){
			$userModel = $this->model('UserDAO');
			$userModel->destroySession();
			
			$this->view('templates/header');
			$this->view('login/index');
			$this->view('templates/footer');
		}
	}

?>