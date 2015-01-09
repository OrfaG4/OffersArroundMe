<?php
require_once "../init.php";
require_once "../models/UserSideOffersDAO.php";

class showOwnerTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new UserSideOffersDAO($db, $net);
    }
    
    public function testShowOwner(){
        $output = $this->testObj->showOwner('2');
        $this->assertNotNull($output);
    }
    
    public function testShowOwnerBadId(){
        $output = $this->testObj->showOwner('this is not a correct value');
        $this->assertTrue(empty($output));
    }
    
    public function testShowOwnerIdDoesNotExist(){
        $output = $this->testObj->showOwner('100005416616516161616');
        $this->assertTrue(empty($output));
    }
    
    public function testShowOwnerIdIsNull(){
        $output = $this->testObj->showOwner(null);
        $this->assertTrue(empty($output));
    }
}
?>