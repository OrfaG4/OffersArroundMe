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
                            
                            if(isset($_POST['distance'])){
                                $distance = $_POST['distance'];
                            }
                        }		
                    $coordinates = array("lat"=>$lat, "long"=>$long,"distance"=>$distance);
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
                
                public function getOffersByUser($uid){
                    $sql = "SELECT * FROM discounts WHERE user_id = '$uid'";
                    $offers = $this->db->query($sql)or die(mysql_error());
                    return $offers->fetchAll(PDO::FETCH_OBJ);
                }
                
                public function updateOfferDetails($id, $title, $desc, $lat, $long, $percent){
                    $sql = "UPDATE discounts SET title = '$title', `desc` = '$desc', lat = '$lat', `long` = '$long', percent = '$percent' WHERE id = '$id'";
                    $offers = $this->db->query($sql)or die(mysql_error());
                    if($offers) return true;
                }
                public function addOffer($title, $uid){
                    $sql="INSERT INTO discounts (title, user_id) VALUES ('$title', '$uid')";
                    $newOffer = $this->db->query($sql)or die(mysql_error());
                    if($newOffer) return true;
                }
                public function deleteOffer($title, $uid){
                    $sql="DELETE FROM discounts WHERE title = '$title' AND user_id = '$uid'";
                    $deletedOffer = $this->db->query($sql)or die(mysql_error());
                    if($deletedOffer) return true;  
                }
	}
?>