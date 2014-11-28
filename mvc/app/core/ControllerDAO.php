<?php 
	class ControllerDAO{
		
		protected $db;
		
		public function __construct(){
			//$this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
			
			try {
				$this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} 
			catch (PDOException $e){
				return $e->getMessage();
				}
			
		}
		
		protected function model($model){
			require_once '../app/models/' . $model . '.php';
			return new $model($this->db);
		}
		
		protected function view($view, $data=array()){
			require_once('../app/views/' . $view . '.php');
		}
}
?>