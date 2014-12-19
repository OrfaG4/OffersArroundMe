<?php 
	class OffersDAO{
		protected $db, $net;
		
		public function __construct(PDO $db, Network $net){
			$this->db = $db;
			$this->net = $net;
		}
		
		public function retreiveCoordinates($location, $confirmConnectionDomain, $confirmConnectionPort){
                    $connection = $this->net->determineInternetConnection($confirmConnectionDomain, $confirmConnectionPort);
                    if($connection){
                        $response = $this->net->getGoogleDataFor($location, $connection);
			$lat = null;
                        $long = null;
                        $jsonArray = json_decode($response, true);
			if($jsonArray['results']!=null){
                            $lat = $jsonArray['results'][0]['geometry']['location']['lat'];
                            $long = $jsonArray['results'][0]['geometry']['location']['lng'];
                        }		
                    $coordinates = array("lat"=>$lat, "long"=>$long);
                    return $coordinates;
                    }
                    else{
			return array('error'=>'No Internet');
                    }
						
                }
		
		//epistrefei oles tis prosfores		
		public function getOffersDAO($sql){
			$offers = $this->db->query($sql)or die(mysql_error());
			return $offers->fetchAll(PDO::FETCH_OBJ);
		}
		
		//epistrefei tis korufaies 3 prosfores
		public function getTopThreeOffersDAO($sql){
			$topThreeOffers = $this->db->query($sql)or die(mysql_error());
			return $topThreeOffers->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>
