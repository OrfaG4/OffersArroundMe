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
		//epistrefei oles tis prosfores		
		public function getOffersDAO(){
			$offers = $this->db->query("SELECT * FROM discounts")or die(mysql_error());
			return $offers->fetchAll(PDO::FETCH_OBJ);
		}
		
		//epistrefei tis korufaies 3 prosfores
		public function getTopThreeOffersDAO(){
			$topThreeOffers = $this->db->query("SELECT * FROM discounts ORDER BY percent DESC LIMIT 3 ")or die(mysql_error());
			return $topThreeOffers->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>