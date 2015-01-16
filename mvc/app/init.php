<?php 
	require_once 'core/App.php';
	require_once 'core/ControllerDAO.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'offers');

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

define('APP_ASSETS', 
	  	'http://' . $_SERVER['HTTP_HOST'] . 
		str_replace($_SERVER['DOCUMENT_ROOT'],'',
		str_replace('\\','/',dirname(__DIR__).'/public/'))
	  );
	  
define ('HOME_PAGE', "http://localhost/mvc/public");
?>
