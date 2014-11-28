<?php 
	class Home extends ControllerDAO{
		
		public function index(){
			$offersModel = $this->model('OffersDAO');
			$offers = $offersModel->getTopThreeOffersDAO();
				
			$this->view('templates/header');
			$this->view('home/index',array('offers'=>$offers));
			$this->view('templates/footer');
		}
		
		public function coor(){
			$offersModel = $this->model('Offers');
			$coordinants = $offersModel->retreiveCoordinants();
			$this->view('home/coordinants', array('coords'=>$coordinants));
		}
		
		public function markers(){
			$offersModel = $this->model('Offers');
			$markerData = $offersModel->getOffersDAO();
			$this->view('home/markers', array('markers' => $markerData ));
		}
	}
?>