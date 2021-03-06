<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	
            <title></title>
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="<?php echo APP_ASSETS;?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo APP_ASSETS;?>css/customStyle.css">
        <!-- jQuery library Bootstrap -->
        <script src="<?php echo APP_ASSETS;?>js/jquery-2.1.1.min.js"></script>
        <!-- JavaScript plugins Bootstrap -->
        <script src="<?php echo APP_ASSETS;?>js/bootstrap.min.js"></script>
        <script src="<?php echo APP_ASSETS;?>js/scrpits.js"></script>
        <script src="<?php echo APP_ASSETS;?>js/functions.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
        </head>
	
	<body>

	<!-- Menu Αρχη -->
		<nav class="navbar navbar-inverse" role="navigation">
           <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">OffersAroundMe</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo HOME_PAGE . "/home/index"; ?>">Home</a></li>
                    <?php 
                    if(isset($_SESSION['type'])){
                            if($_SESSION['type'] == "store"){
                                echo "<li><a href='" . HOME_PAGE . "/stores" . "'>My Offers</a></li>";
                            }else{
                                echo "<li><a href='" . HOME_PAGE . "/userSide" . "'>Offers</a></li>";
                            }
                            
                            if($_SESSION['uid'] == "1"){
                                 echo "<li><a href='" . HOME_PAGE . "/admin" . "'>Admin Side</a></li>";
                            }
                    }?>
                    <li><a href="<?php echo HOME_PAGE . "/contact"; ?>">Contact Us</a></li>
                  </ul>
                </div>
            </div>
		</nav>
	<!-- Menu Τελος -->
