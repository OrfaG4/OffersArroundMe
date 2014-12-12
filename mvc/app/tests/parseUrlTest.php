<?php 

require_once "../init.php";
require_once "MockClasses.php";

class ParseUrl extends PHPUnit_Framework_TestCase{
	private $testObj;
	
	public function setUp(){
		$this->testObj = new MockApp();
		$_GET['url'] = 'some/test';
	}
	
	public function testParseUrl(){
		$url = $this->testObj->parseUrl();
		$this->assertNotNull($url);
	}
	
	public function testUrlIsAccurate1(){
		$url = $this->testObj->parseUrl();
		$this->assertEquals($url[0], 'some');
	}
	
	public function testUrlIsAccurate2(){
		$url = $this->testObj->parseUrl();
		$this->assertEquals($url[1], 'test');
	}
	
	public function testUrlIsArray(){
		$url = $this->testObj->parseUrl();
		$this->assertEquals(is_array($url),true);
	}
}

?>