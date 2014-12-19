<?php
require_once '../core/Network.php';
class DetermineInternetConnectionTest extends PHPUnit_Framework_TestCase{
    
    public function setUp(){
        $this->testObj =  new Network();
    }
    
    public function testValidDomainAndPort(){
        $domain = "www.facebook.com";
        $port = 80;
        $output = $this->testObj->determineInternetConnection($domain, $port);
        $this->assertTrue($output);
    }
    
    public function testValidDomainInvalidPort(){
        $domain = "www.facebook.com";
        $port = "portName";
        $output = $this->testObj->determineInternetConnection($domain, $port);
        $this->assertFalse($output);
    }
    
    public function testInvalidDomainValidPort(){
        $domain = "wwwabcdefgom";
        $port = 80;
        $output = $this->testObj->determineInternetConnection($domain, $port);
        $this->assertFalse($output);
    }
    
    public function testAllInvalid(){
        $domain = "wwwabcdefgom";
        $port = '80abcdefg*224413';
        $output = $this->testObj->determineInternetConnection($domain, $port);
        $this->assertFalse($output);
    }
    
    //Den upostirizontai sub-domains
    public function testSubdomainValidPort(){
        $domain = "www.github.hubspot.com/offline/docs/welcome/";
        $port = 80;
        $output = $this->testObj->determineInternetConnection($domain, $port);
        $this->assertFalse($output);
    }
}
