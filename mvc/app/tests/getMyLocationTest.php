<?php 
require_once "../init.php";
require_once "../models/LocationDAO.php";

//Elegxw an to txt arxeio einai adeio
class GetMyLocation extends PHPUnit_Framework_TestCase{
	private $testObj;
	
	public function setUp(){
		$this->testObj = new LocationDAO();
		$location = APP . "location.txt";
	}
	public function testTxtIsEmpty(){
		$txt = $this->testObj->getMyLocation($location);
		$this->assertNotNull($txt);
	}
}

?>