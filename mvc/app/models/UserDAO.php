<?php 
	class UserDAO{
		
		protected $db;
		public function __construct(PDO $db){
			$this->db = $db;
		}
				
		public function getUsersDAO(){
			$user = $this->db->query("SELECT * FROM users") or die(mysql_error());
			return $user->fetchAll(PDO::FETCH_OBJ);
		}
		
				
		public function auth(){
			$users = $this->getUsersDAO();
			if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
				foreach($users as $user){
					if($_REQUEST['username'] == $user->username && $_REQUEST['password']==$user->password){
						session_start();
						$_SESSION['user'] = $_REQUEST['username'];
						return true;
					}
					else{
						return false;
					}
				}
			}else{
				return false;
			}
		}
		
		public function  destroySession(){
				//$_SESSION = array(); //destroy all of the session variables
  				session_start();
				session_unset();
				session_destroy();
			}
	}
?>