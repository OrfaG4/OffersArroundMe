<?php 

class MockOffersDAO{
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
}
class OffersDAOTest extends PHPUnit_Framework_TestCase{
	
	protected $db;
	
	public function setUp(){
		//Δημιουργώ ενα αντικείενο της κλάσης MockOffersDAO
		$this->testCoordinants = new MockOffersDAO();
		//Αρχικοποιώ ένα παραδειγματικό location
		$_POST['location'] = 'Serres';
	}
	
	public function testRetreiveCoordinants(){
		$coordinants = $this->testCoordinants->retreiveCoordinants();
		
		$this->assertEquals(true, is_double($coordinants['lat']));
		$this->assertEquals(true, is_double($coordinants['long']));
	}
}

?>