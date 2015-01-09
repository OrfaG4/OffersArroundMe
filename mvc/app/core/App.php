<?php 
class App{
	
	protected $controller = 'home';
	protected $method = 'index';
	protected $params = array();
	
	public function __construct(){
		$url = $this->parseUrl($_GET['url']);
		
		if(file_exists('../app/controllers/' .$url[0]. '.php')){
			$this->controller = $url[0];
			unset ($url[0]);
		}
		
		require_once '../app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;
		
		if(isset($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset ($url[1]);
			}
		}
		$this->params = $url ? array_values($url):array();
		call_user_func_array(array($this->controller, $this->method), $this->params);
	} 
	
	public function parseUrl($url){
			/*	Βάζω το url σε μεταβλητή πίνακα. 
			 *	πχ home/index μετατρέπεται σε $url[0] = home, $url[1] = index
			 */
			$url = explode('/', filter_var(rtrim($url, '/'),FILTER_SANITIZE_URL));
			return($url);
	}
}

?>