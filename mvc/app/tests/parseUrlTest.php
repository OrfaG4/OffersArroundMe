<?php 

require_once "../init.php";
require_once "../core/App.php";

class ParseUrl extends PHPUnit_Framework_TestCase{     
    
    public function testIsUrlAnArray(){
        $url = "some/thing";
        $stub = $this->getMockBuilder('App')
                ->setMethods(null)
                ->disableOriginalConstructor()
                ->getMock();
        
        $output = $stub->parseUrl($url);
        
        $this->assertTrue(is_array($output));
    }
    
    public function testParseUrl(){
        $url = "some/thing";
        $stub = $this->getMockBuilder('App')
                ->setMethods(null)
                ->disableOriginalConstructor()
                ->getMock();
        
        $output = $stub->parseUrl($url);
        
        $this->assertEquals($output[0], 'some');
        $this->assertEquals($output[1], 'thing');
    }
    
   public function testParseNoSlashUrl(){
        $url = "noSlash";
        $stub = $this->getMockBuilder('App')
                ->setMethods(null)
                ->disableOriginalConstructor()
                ->getMock();
        
        $output = $stub->parseUrl($url);
        $this->assertEquals($output[0], 'noSlash');
        $this->assertFalse(isset($output[1]));
    }
    
    public function testParseUrlWithSpace(){
        $url = "with space/withoutSpace";
        $stub = $this->getMockBuilder('App')
                ->setMethods(null)
                ->disableOriginalConstructor()
                ->getMock();
        
        $output = $stub->parseUrl($url);
        //TRIM!!!
        $this->assertEquals($output[0], 'withspace');
        $this->assertEquals($output[1], 'withoutSpace');
    }
    
    public function testParseNumbersAndSymbols(){
        $url = "1344*^$$/4889 4  ^%$ 654&%$";
        $stub = $this->getMockBuilder('App')
                ->setMethods(null)
                ->disableOriginalConstructor()
                ->getMock();
        
        $output = $stub->parseUrl($url);
        //TRIM!!!
        $this->assertEquals($output[0], '1344*^$$');
        $this->assertEquals($output[1], '48894^%$654&%$');
    }
    
}
?>
