<?php 
require_once "../init.php";
require_once "../models/LocationDAO.php";

class SeperateCoordinates extends PHPUnit_Framework_TestCase{
	private $testObj;
	
	public function setUp(){
		$this->testObj = new LocationDAO();
	}
	public function testIsArray(){
            $context = '10 20';    
            $array = $this->testObj->seperateCoordinates($context);
            $this->assertTrue(is_array($array));
	}
        
       public function testIsArrayWithBadValues(){
            $context = 'abcm,888$*6645!#@*';    
            $array = $this->testObj->seperateCoordinates($context);
            $this->assertTrue(is_array($array));
	}
	
	public function testIsArrayEmpty(){
            $context = 'this_is a_full_array';    
            $array = $this->testObj->seperateCoordinates($context);
            $this->assertNotNull($array);
	}
        
        public function testCellsAreFilled(){
            $context = '30.15553, 421421';    
            $array = $this->testObj->seperateCoordinates($context);
            $this->assertNotNull($array[0]);
            $this->assertNotNull($array[1]);
	}
        
        public function testCellsTakeValues(){
            $context = '15 37';    
            $array = $this->testObj->seperateCoordinates($context);
            $this->assertEquals($array[0], 15);
            $this->assertEquals($array[1], 37);
	}
}

?>