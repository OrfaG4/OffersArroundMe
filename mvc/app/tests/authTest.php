<?php

require_once "../init.php";
require_once "../models/UserDAO.php";

class authTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $net = new Network();
        $this->testObj = new UserDAO($db, $net);
    }
    
    public function testTrueLogin(){
        $output = $this->testObj->auth('alex','1111');
        $this->assertTrue($output);
    }
    
    public function testLoginWithWrongUsername(){
        $output = $this->testObj->auth('---alex12221','1111');
        $this->assertFalse($output);
    }
    
    public function testLoginWithWrongPassword(){
        $output = $this->testObj->auth('alex','111f24!$%^$35f1');
        $this->assertFalse($output);
    }
    
    public function testLoginWithEmptyUsername(){
        $output = $this->testObj->auth(NULL,'1111');
        $this->assertFalse($output);
    }
    
    public function testLoginWithEmptyPassword(){
        $output = $this->testObj->auth('alex',NULL);
        $this->assertFalse($output);
    }
    
    public function testLoginWithBothEmpy(){
        $output = $this->testObj->auth(NULL,NULL);
        $this->assertFalse($output);
    }
    
    public function testLoginWithBothPassword(){
        $output = $this->testObj->auth(1111,1111);
        $this->assertFalse($output);
    }
}
