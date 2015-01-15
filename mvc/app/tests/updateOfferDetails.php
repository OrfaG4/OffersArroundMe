

<?php
require_once "../init.php";
require_once "../models/OffersDAO.php";

class updateOfferDetails extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new OffersDAO($db, $net);
    }
    
    public function testReturnsEmptyWithGoodValues(){
        $output = $this->testObj->updateOfferDetails("2", "testing", "testing", "testing", "testing", "testing");
        $this->assertTrue($output);
    }
    
    public function testReturnsFalseWithBadValues(){
        $output = $this->testObj->updateOfferDetails("", "testing", "testing", "testing", "testing", "testing");
        $this->assertFalse($output);
    }
	
	public function testReturnsFalseWithBadValues2(){
        $output = $this->testObj->updateOfferDetails("2", "testing", "testing", "testing", "testing", "");
        $this->assertTrue($output);
    }
}
