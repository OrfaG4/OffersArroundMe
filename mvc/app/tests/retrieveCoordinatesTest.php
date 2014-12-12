<?php 
require_once "../init.php";
require_once "MockClasses.php";

//to test xreaiazetai internet
class RetrieveCoordinates extends PHPUnit_Framework_TestCase{
	private $testObj;
	
	public function setUp(){
		$this->testObj = new MockOffersDAO();
		$_POST['location'] = "Serres";
	}
	
	public function testCoordinatesNotEmpty(){
		$coordinates = $this->testObj->retreiveCoordinants();
		$this->assertNotNull($coordinates);
	}
	
	public function testCoordinatesAreArray(){
		$coordinates = $this->testObj->retreiveCoordinants();
		$this->assertNotNull(is_array($coordinates));
	}
}
?>