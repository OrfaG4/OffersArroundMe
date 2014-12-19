<?php 
	class Login extends ControllerDAO{

		public function index(){
			$users = $this->model('UserDAO');
			$offersModel = $this->model('OffersDAO');
			$offers = $offersModel->getTopThreeOffersDAO("SELECT * FROM discounts ORDER BY percent DESC LIMIT 3 ");
			
			$this->view('templates/header');
			if($users->auth($_REQUEST['username'],$_REQUEST['password'])){
				$this->view('home/index' ,array('offers'=>$offers,'user'=>$_REQUEST['username']));
			}else{
				$this->view('login/loginFailed');
			}
			$this->view('templates/footer');
		}
	}//end class
	
?>
