

<?php
require_once "../init.php";
require_once "../models/OffersDAO.php";

class AddOffer extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new OffersDAO($db, $net);
    }
    
    public function testReturnsTrueWithGoodValues(){
        $output = $this->testObj->addOffer("2","testOffer2");
        $this->assertTrue($output);
    }
    
    public function testReturnsFalseWithNoID(){
        $output = $this->testObj->addOffer("testtitle","");
        $this->assertFalse($output);
    }
	
	public function testReturnsFalseWhenEmpty(){
        $output = $this->testObj->addOffer("","");
        $this->assertFalse($output);
    }
}
?>
