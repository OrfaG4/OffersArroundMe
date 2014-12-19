<?php 
	class Home extends ControllerDAO{
		
		public function index(){
			session_start();
			if(!isset($_SESSION['user'])){
				$this->view('templates/header');
				$this->view('login/index');
				$this->view('templates/footer');
			
			}else{
				$offersModel = $this->model('OffersDAO');
				$offers = $offersModel->getTopThreeOffersDAO("SELECT * FROM discounts ORDER BY percent DESC LIMIT 3 ");
				
				$this->view('templates/header');
				$this->view('home/index', array('offers'=>$offers));
				$this->view('templates/footer');
			}
		}
		
		public function coor(){
			$offersModel = $this->model('OffersDAO');
			$location = $_POST['location'];
			$coordinates = $offersModel->retreiveCoordinates($location,'www.google.com',80);
			$this->view('home/coordinants', array('coords'=>$coordinates));
		}
		public function markers(){
			$offersModel = $this->model('OffersDAO');
			$markerData = $offersModel->getOffersDAO("SELECT * FROM discounts");
			$this->view('home/markers', array('markers' => $markerData ));
		}
		
	}
?>
