<?php

class MockApp{
	public function parseUrl(){
		if(isset($_GET['url'])){
			$url = explode('/', filter_var(rtrim($_GET['url'], '/'),FILTER_SANITIZE_URL));
			return($url);
				
		}
	}
}

class AppTest extends PHPUnit_Framework_TestCase{
	private $testApp;
	public function setUp(){
		//Δημιουργώ ενα αντικείενο της κλάσης MockApp
		$this->testApp = new MockApp();
		//Αρχικοποιώ ένα παραδειγματικό URL
		$_GET['url'] = 'home/index';
	}
	public function testIsUrlParsed(){
		//Καλώ την συνάρτηση parseUrl
		$parsedUrl = $this->testApp->parseUrl();
		//Ελέγχω αν δεν υπάρχει 
		$this->assertEquals('home', $parsedUrl[0]);
	}
}
?>