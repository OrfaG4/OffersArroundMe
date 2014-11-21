<?php 
	class Home extends Controller{
		
		public function index(){
			$userModel = $this->model('User');
			$offersModel = $this->model('Offers');
			$user = $userModel->getUser();
			$offers = $offersModel->getOffers();			
			$this->view('templates/header');
			$this->view('home/index',array('user'=>$user, 'offers'=>$offers));
			$this->view('templates/footer');
		}
		
		public function coor(){
			if(isset($_POST['location'])){
				$location = $_POST['location'];
				$url = "http://maps.google.com/maps/api/geocode/json?address=$location&sensor=false&region=GR";
				$response = file_get_contents($url);
				$response = json_decode($response, true);
							
				$lat = $response['results'][0]['geometry']['location']['lat'];
				$long = $response['results'][0]['geometry']['location']['lng'];
							
				$coordinants = array("lat"=>$lat, "long"=>$long);
				$this->view('home/coordinants', array('coords'=>$coordinants));
			}
		}
		
		public function markers(){
			$offersModel = $this->model('Offers');
			$markerData = $offersModel->getOffers();
			$this->view('home/markers', array('markers' => $markerData ));
		}
	}
?>