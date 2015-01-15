<?php
require_once "../init.php";
require_once "../models/OpinionsDAO.php";

class getAllOpinionsTest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->testObj = new OpinionsDAO($db);
    }
    
    public function testTableHasRows(){
        $output = $this->testObj->getAllOpinions("Select * from opinions");
        $this->assertGreaterThan(0, count($output));
    }
    
    public function testTableSorts(){
        $output = $this->testObj->getAllOpinions("Select * from opinions ORDER BY id DESC");
        $this->assertGreaterThan($output[1]->id, $output[0]->id);
    }
    
    public function testTableHasLimit(){
        $output = $this->testObj->getAllOpinions("Select * from opinions ORDER BY id ASC LIMIT 1");
        $this->assertEquals(1, count($output));
    }
    
    public function testTableSelectSpecific(){
        $output = $this->testObj->getAllOpinions("Select id from opinions");
        $this->assertTrue(isset($output[0]->id));
        $this->assertFalse(isset($output[0]->percent));
    }
}
