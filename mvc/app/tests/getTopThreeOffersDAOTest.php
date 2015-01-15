<?php
require_once "../init.php";
require_once "../models/OffersDAO.php";

class getTopThreeOffersDAOTest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new OffersDAO($db, $net);
    }
    
    public function testTableHasRows(){
        $output = $this->testObj->getTopThreeOffersDAO("SELECT * FROM discounts ORDER BY percent DESC LIMIT 3 ");
        $this->assertGreaterThan(0, count($output));
        var_dump($output);
    }
    
    public function testTableSorts(){
        $output = $this->testObj->getTopThreeOffersDAO("Select * from discounts ORDER BY id ASC");
        $this->assertGreaterThan($output[0]->id, $output[1]->id);
    }
    
    public function testTableHasLimit(){
        $output = $this->testObj->getTopThreeOffersDAO("Select * from discounts ORDER BY id ASC LIMIT 1");
        $this->assertEquals(1, count($output));
    }
    
    public function testTableSelectSpecific(){
        $output = $this->testObj->getTopThreeOffersDAO("Select id from discounts");
        $this->assertTrue(isset($output[0]->id));
        $this->assertFalse(isset($output[0]->percent));
    }
}
