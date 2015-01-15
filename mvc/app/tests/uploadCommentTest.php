<?php
require_once "../init.php";
require_once "../models/UserSideOffersDAO.php";

class uploadCommentTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new UserSideOffersDAO($db, $net);
    }
    
    public function testUploadComment(){
        $output = $this->testObj->uploadComment(1, 'this is a comment coming from the testing proccess');
        $this->assertTrue($output);
    }
    
    
    public function testUploadCommentWithEmptyId(){
        $output = $this->testObj->uploadComment('','this is a comment coming from the testing proccess');
        $this->assertNull($output);
    }
    
    public function testUploadCommentWithBadId2(){
        $output = $this->testObj->uploadComment(false,'this is a comment coming from the testing proccess');
        $this->assertNull($output);
    }
    
    public function testUploadCommentWithBadComment(){
        $output = $this->testObj->uploadComment(1, 12);
        $this->assertNull($output);
    }
    
    public function testUploadCommentWithBadComment2(){
        $output = $this->testObj->uploadComment(1, true);
        $this->assertNull($output);
    }
    
    public function testUploadCommentWithNulls(){
        $output = $this->testObj->uploadComment(null,null);
        $this->assertNull($output);
    }
}
?>
