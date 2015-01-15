

<?php
require_once "../init.php";
require_once "../models/OffersDAO.php";

class DeleteOffer extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new OffersDAO($db, $net);
    }
    
    public function testReturnsTrueWithGoodValues(){
        $output = $this->testObj->deleteOffer("2","testOffer2");
        $this->assertTrue($output);
    }
    
    public function testReturnsFalseWithNoID(){
        $output = $this->testObj->deleteOffer("testtitle","");
        $this->assertFalse($output);
    }
	
	public function testReturnsFalseWhenEmpty(){
        $output = $this->testObj->deleteOffer("","");
        $this->assertFalse($output);
    }
}
?>
