<?php 
	class Offers{
		protected $db;
		
		public function __construct(PDO $db){
			$this->db = $db;
		}
				
		public function getOffers(){
			$user = $this->db->query("SELECT * FROM discounts");
			return $user->fetchAll(PDO::FETCH_OBJ);
		}
	}
?>