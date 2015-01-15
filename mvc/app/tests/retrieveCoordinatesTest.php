<?php 
require_once "../init.php";
require_once "../models/OffersDAO.php";

class RetrieveCoordinates extends PHPUnit_Framework_TestCase{
	private $testObj;
	
	public function setUp(){
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $net = new Network();
            $this->testObj = new OffersDAO($db, $net);
	}
	
	public function testCoordinatesNotEmpty(){
		$coordinates = $this->testObj->retreiveCoordinates('Serres','www.goole.com',80);
		$this->assertNotNull($coordinates);
	}
       
        public function testCoordinatesReturnArray(){
		$coordinates = $this->testObj->retreiveCoordinates('Serres','www.goole.com',80);
		$this->assertTrue(is_array($coordinates));
	}
        
        public function testCoordinatesWhenLocationIsBad(){
		$coordinates = $this->testObj->retreiveCoordinates('---','www.goole.com',80);
		var_dump($coordinates);
                $this->assertNull($coordinates['lat']);
                $this->assertNull($coordinates['long']);
	}
        
        public function testCoordinatesWhenDomainNameIsBad(){
		$coordinates = $this->testObj->retreiveCoordinates('---','www.gom',80);
		var_dump($coordinates);
                $this->assertEquals($coordinates['error'],'No Internet');
                $this->assertFalse(isset($coordinates['lat']));
                $this->assertFalse(isset($coordinates['long']));
	}
        
        public function testCoordinatesWhenPortIsString(){
		$coordinates = $this->testObj->retreiveCoordinates('---','www.gom',"80");
		var_dump($coordinates);
                $this->assertEquals($coordinates['error'],'No Internet');
                $this->assertFalse(isset($coordinates['lat']));
                $this->assertFalse(isset($coordinates['long']));
	}
        
        public function testCoordinatesWhenPortIsBadString(){
		$coordinates = $this->testObj->retreiveCoordinates('---','www.gom',"this is a string");
		var_dump($coordinates);
                $this->assertEquals($coordinates['error'],'No Internet');
                $this->assertFalse(isset($coordinates['lat']));
                $this->assertFalse(isset($coordinates['long']));
	}
}
?>