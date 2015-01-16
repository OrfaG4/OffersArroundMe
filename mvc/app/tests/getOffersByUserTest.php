

<?php
require_once "../init.php";
require_once "../models/OffersDAO.php";

class getOffersByUserTest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new OffersDAO($db, $net);
    }
    
    public function testReturnsArray(){
        $output = $this->testObj->getOffersByUser(2);
        $this->assertTrue(is_array($output));
        $this->assertFalse(empty($output));
    }
    
    public function testReturnsNotNull(){
        $output = $this->testObj->getOffersByUser("2");
        $this->assertNotNull($output);
        $this->assertTrue(isset($output[0]->id));
    }
    
    public function testTableIsEmpty(){
        $output = $this->testObj->getOffersByUser(true);
        $this->assertTrue(empty($output));
    }
    
    public function testTableSelectSpecific(){
        $output = $this->testObj->getOffersByUser("gasdfaskfashafs");
        $this->assertTrue(!isset($output[0]->id));
    }
}
?>
