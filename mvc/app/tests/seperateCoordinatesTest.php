<?php 
require_once "../init.php";
require_once "../models/LocationDAO.php";

class SeperateCoordinates extends PHPUnit_Framework_TestCase{
	private $testObj;
	
	public function setUp(){
		$this->testObj = new LocationDAO();
	}
	public function testIsArray(){
		$array = $this->testObj->seperateCoordinates();
		$this->assertTrue(is_array($array));
	}
	
	public function testIsArrayEmpty(){
		$array = $this->testObj->seperateCoordinates();
		$this->assertNotNull($array);
	}
}

?>