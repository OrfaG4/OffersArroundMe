<?php
class UserSideOffersDAO{
    protected $db, $net;
        public function __construct(PDO $db, Network $net){
            $this->db = $db;
            $this->net = $net;
	}
        
        public function showAllOffers(){
            $sql = "SELECT * FROM discounts ORDER BY user_id ASC";
            $offers = $this->db->query($sql)or die(mysql_error());
            return $offers->fetchAll(PDO::FETCH_OBJ);
        }
        public function showOwner($uid){
            $sql = "SELECT * FROM users WHERE id = '$uid'";
            $owners = $this->db->query($sql)or die(mysql_error());
            return $owners->fetchAll(PDO::FETCH_OBJ);
        }
        
        public function uploadComment($uid,$comment){
            $sql = "INSERT INTO comments (user_id, comment) VALUES ('$uid', '$comment')";
            if($uid!="" && is_string($comment)){
                $done = $this->db->query($sql)or die(mysql_error());
                if($done) {
                    return true;
                }
            }
        }
        
        public function showComments($uid){
            $sql = "SELECT * FROM comments WHERE user_id = '$uid'";
            $owners = $this->db->query($sql)or die(mysql_error());
            return $owners->fetchAll(PDO::FETCH_OBJ);   
        }
}
?>