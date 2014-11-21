<?php 
	class User{
		
		protected $db;
		
		public function __construct(PDO $db){
			$this->db = $db;
		}
				
		public function getUser(){
			$user = $this->db->query("SELECT * FROM users");
			return $user->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>