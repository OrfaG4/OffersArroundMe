<?php 
        session_start();
	class Login extends ControllerDAO{

		public function index(){
			$users = $this->model('UserDAO');
			$offersModel = $this->model('OffersDAO');
			$offers = $offersModel->getTopThreeOffersDAO("SELECT * FROM discounts ORDER BY percent DESC LIMIT 3 ");
			
			$this->view('templates/header');
			if($users->auth($_REQUEST['username'],$_REQUEST['password'])){
                                echo"<META http-equiv='refresh' content='0;URL=http://localhost/mvc/public/home'>";
			}else{
				$this->view('login/loginFailed');
			}
			$this->view('templates/footer');
		}
	}//end class
	
?>
