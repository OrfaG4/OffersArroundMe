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
				$offers = $offersModel->getTopThreeOffersDAO();
				
				$this->view('templates/header');
				$this->view('home/index', array('offers'=>$offers));
				$this->view('templates/footer');
			}
		}
		
		public function coor(){
			$offersModel = $this->model('OffersDAO');
			$coordinants = $offersModel->retreiveCoordinants();
			$this->view('home/coordinants', array('coords'=>$coordinants));
		}
		
		public function markers(){
			$offersModel = $this->model('OffersDAO');
			$markerData = $offersModel->getOffersDAO();
			$this->view('home/markers', array('markers' => $markerData ));
		}
		
	}
?>