<?php 
require_once "../init.php";
require_once "../models/LocationDAO.php";

//Elegxw an to txt arxeio einai adeio
class GetMyLocation extends PHPUnit_Framework_TestCase{
	private $testObj;
	public function setUp(){
		$this->testObj = new LocationDAO();
	}
	
        public function testTxtIsEmpty(){
                $location = APP . "location.txt";
		$txt = $this->testObj->getMyLocation($location);
		$this->assertNotNull($txt);
	}
        
        public function testSeperateBySpace(){
                $location = APP . "location.txt";
		$txt = $this->testObj->getMyLocation($location);
		$this->assertContains(" ", $txt);
	}
        
        public function testNumbersHaveDots(){
                $location = APP . "location.txt";
		$txt = $this->testObj->getMyLocation($location);
		$this->assertContains(".", $txt);
	}
        
        public function testTxtContainsNumbers(){
                $location = APP . "location.txt";
		$txt = $this->testObj->getMyLocation($location);
		$this->assertEquals(preg_match('/[0-9]/', $txt),1);
	}
}
?>
