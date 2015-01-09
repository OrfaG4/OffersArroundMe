<?php
require_once "../init.php";
require_once "../models/UserSideOffersDAO.php";

class showCommentsTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new UserSideOffersDAO($db, $net);
        $this->testObj->uploadComment(2360,'test Comment from testing process');
    }
    
    public function testShowComments(){
        $output = $this->testObj->showComments(2360);
        $this->assertNotEmpty($output);
    }
    
    public function testShowCommentsWithBadId(){
        $output = $this->testObj->showComments("bad id");
        $this->assertEmpty($output);
    }
    
    public function testShowCommentsReturnsArray(){
        $output = $this->testObj->showComments("bad id");
        $this->assertTrue(is_array($output));
    }
    
    public function testShowCommentsIdsMatch(){
        $output = $this->testObj->showComments(2360);
        $testVal = $output[0];
        $this->assertEquals(2360,$testVal->user_id);
    }
}
?>
