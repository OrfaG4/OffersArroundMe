<?php 
require_once "../models/OffersDAO.php";
require_once "../models/UserDAO.php";
require_once "../core/ControllerDAO.php";
require_once "../core/App.php";


class MockOffersDAO extends OffersDAO{
	public function __construct(){
	}
}

class MockUserDAO extends UserDAO{
	public function __construct(){
	}
}

class MockControllerDAO extends ControllerDAO{
}

class MockApp extends App{
	public function __construct(){
	}
}
?>