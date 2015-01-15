<?php
require_once "../init.php";
require_once "../models/UserSideOffersDAO.php";

class uploadOpinionTest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new UserSideOffersDAO($db, $net);
    }
    //$uid, $reason, $comment, $sql INSERT INTO opinions (user_id, reason, comment) VALUES('$uid', '$reason', '$comment')
    public function testUploadOpinionGoodValues(){
        $uid = "1";
        $reason = "testing";
        $comment = "for testing purpose";
        $sql = "INSERT INTO opinions (user_id, reason, comment) VALUES('$uid', '$reason', '$comment')";
        $output = $this->testObj->uploadOpinion($uid, $reason, $comment, $sql);
        $this->assertTrue($output);
    }
    
    public function testUploadReturnsNullBadValues1(){
        $uid = "";
        $reason = "testing";
        $comment = "for testing purpose";
        $sql = "INSERT INTO opinions (user_id, reason, comment) VALUES('$uid', '$reason', '$comment')";
        $output = $this->testObj->uploadOpinion($uid, $reason, $comment, $sql);
        $this->assertNull($output);
    }
    
    public function testUploadReturnsNullBadValues2(){
        $uid = "1";
        $reason = "testing";
        $comment = 1;
        $sql = "INSERT INTO opinions (user_id, reason, comment) VALUES('$uid', '$reason', '$comment')";
        $output = $this->testObj->uploadOpinion($uid, $reason, $comment, $sql);
        $this->assertNull($output);
    }
    
    public function testUploadWorksWithNoReason(){
        $uid = "1";
        $reason = "";
        $comment = "testing teisting";
        $sql = "INSERT INTO opinions (user_id, reason, comment) VALUES('$uid', '$reason', '$comment')";
        $output = $this->testObj->uploadOpinion($uid, $reason, $comment, $sql);
        $this->assertTrue($output);
    }
    
}
