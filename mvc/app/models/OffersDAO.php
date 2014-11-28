<?php 
	class OffersDAO{
		protected $db;
		
		public function __construct(PDO $db){
			$this->db = $db;
		}
		
		public function retreiveCoordinants(){
				if(isset($_POST['location'])){
				$location = $_POST['location'];
				$url = "http://maps.google.com/maps/api/geocode/json?address=$location&sensor=false&region=GR";
				$response = file_get_contents($url);
				$response = json_decode($response, true);
							
				$lat = $response['results'][0]['geometry']['location']['lat'];
				$long = $response['results'][0]['geometry']['location']['lng'];
							
				$coordinants = array("lat"=>$lat, "long"=>$long);
				return $coordinants;
			}
		}
				
		public function getOffersDAO(){
			$user = $this->db->query("SELECT * FROM discounts");
			return $user->fetchAll(PDO::FETCH_OBJ);
		}
		
		public function getTopThreeOffersDAO(){
			$user = $this->db->query("SELECT * FROM discounts ORDER BY percent DESC LIMIT 3 ");
			return $user->fetchAll(PDO::FETCH_OBJ);
		}
		
	}
?>