<?php 
	class Login extends ControllerDAO{

		public function index(){
			$users = $this->model('UserDAO');
			$offersModel = $this->model('OffersDAO');
			$offers = $offersModel->getTopThreeOffersDAO();
			
			$this->view('templates/header');
			if($users->auth()){
				$this->view('home/index' ,array('offers'=>$offers));
			}else{
				$this->view('login/loginFailed');
			}
			$this->view('templates/footer');
		}
	}//end class
	
?>