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
				
		public function auth($username, $password){
                    $users = $this->getUsersDAO();
                    foreach($users as $user){
                        if($username == $user->username && $password == $user->password){
                            //session_start();
                            $_SESSION['user'] = $username;
                            return true;
			}
                        else{
                            return false;
			}
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
