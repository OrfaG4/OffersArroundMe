<?php 
	require_once 'core/App.php';
	require_once 'core/Controller.php';
	
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('APP_ASSETS', 
	  	'http://' . $_SERVER['HTTP_HOST'] . 
		str_replace($_SERVER['DOCUMENT_ROOT'],'',
		str_replace('\\','/',dirname(__DIR__).'/public/'))
	  );
?>