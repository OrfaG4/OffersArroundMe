<?php
require_once "../init.php";
require_once "../models/UserDAO.php";

class registerTest extends PHPUnit_Framework_TestCase{
   
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new UserDAO($db, $net);
    }
    
    public function testSuccessfullRegister(){
        $output = $this->testObj->register('testName','1111','test@email.com','user');
        $this->assertTrue($output);
    }
    
    public function testRegisterEmptyUsername(){
        $output = $this->testObj->register('','1111','test@email.com','user');
        $this->assertFalse($output);
    }
    
    public function testRegisterEmptyPassword(){
        $output = $this->testObj->register('testName','','test@email.com','user');
        $this->assertFalse($output);
    }
    
    public function testRegisterEmptyEmail(){
        $output = $this->testObj->register('testName','1111','','user');
        $this->assertFalse($output);
    }
    
    public function testRegisterEmptyType(){
        $output = $this->testObj->register('testName','1111','test@email.com','');
        $this->assertFalse($output);
    }
}