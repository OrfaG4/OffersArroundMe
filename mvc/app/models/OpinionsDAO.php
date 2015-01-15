<?php
    class OpinionsDAO{
        protected $db;
        public function __construct(PDO $db){
            $this->db = $db;
	}
        
        public function getAllOpinions($sql){
            $opinions = $this->db->query($sql) or die(mysql_error());
            return $opinions->fetchAll(PDO::FETCH_OBJ);
        }
    }
