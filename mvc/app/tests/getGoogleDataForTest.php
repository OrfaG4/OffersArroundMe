<?php
require_once '../core/Network.php';
class GetGoogleDataFor extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $this->testObj = new Network();
    }
    
    public function testValidLocationAndConnection() {
        $location="Serres";
        $connection = TRUE;
        $output = $this->testObj->getGoogleDataFor($location, $connection);
        $this->assertNotNull($output);
    }
    
    public function testInvalidLocationAndConnection() {
        $location="abc***defgg***";
        $connection = FALSE;
        $output = $this->testObj->getGoogleDataFor($location, $connection);
        $this->assertNull($output);
    }
    
    public function testInvalidLocationAndValidConnection() {
        $location="abc***defgg***";
        $connection = TRUE;
        $output = $this->testObj->getGoogleDataFor($location, $connection);
        
        $array = json_decode($output,true);
        $this->assertEquals($array['status'],'ZERO_RESULTS');
    }
    
    public function testValidLocationAndInvalidConnection() {
        $location="Serres";
        $connection = FALSE;
        $output = $this->testObj->getGoogleDataFor($location, $connection);
        $this->assertNull($output);
    }
    
    public function testReturnsJson() {
        $location="Serres";
        $connection = TRUE;
        $output = $this->testObj->getGoogleDataFor($location, $connection);
        $this->assertNotNull(json_decode($output));
    }
}
