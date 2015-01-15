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
                   // var_dump($users);
                    
                    foreach($users as $user){
                       if($username == $user->username && $password == $user->password){
                           $_SESSION['uid'] = $user->id;
                           $_SESSION['user'] = $username;
                           $_SESSION['type'] = $user->type;
                           return true;
                       }
                    }
                    return false;
		}
		
		public function  destroySession(){
                                session_unset();
				session_destroy();
			}
                        
                public function register($username,$password,$email,$type){
                    $sql = "INSERT INTO users (username, password, email, type) VALUES ('$username', '$password','$email','$type')";
                    $querySuccess = false;
                    if($username!="" && $password!="" && $email!="" && $type !=""){
                        $querySuccess = $this->db->query($sql);
                    }
                    if($querySuccess){
                        return true;
                    }else{
                        return false;
                    }
                }
	}
?>
