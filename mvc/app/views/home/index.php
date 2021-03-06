
	<!-- Κυριο Περιεχόμενο Αρχή -->
	<div class="container-full">

			 <?php if(isset($_SESSION['user'])){ 
				 echo"<div class='row'>";
    			 echo"<div class='col-md-2 col-md-offset-5 jumbotron'>";
				 echo"<h3 style='text-align:center'>Weclome back " . $_SESSION['user'] . " !</h3>";
				 echo"<form action=" . HOME_PAGE . "/logout>";
				 echo "<div class='col-md-2 col-md-offset-4 controls'>
						  <input type='submit' id='btn-login' class='btn btn-success' value='Logout'  />
					   </div>";
					 echo"</form>";
						}
					 echo"</div>";
				echo"</div>";
			?>

		<div class="col-md-8">
		<form id="searchForm" method="POST" class="jumbotron">
			<h2>What place to search? &nbsp&nbsp
			<input type="text" placeholder="Search..." name = "location"/>
                        <button type="submit" class="btn btn-primary" id="searchBtn">Αναζήτηση</button></h2>
                        <label>Radius of offers in km: </label>
                        <select name="distance">
                            <option selected="selected">All Available</option>
                            <option>0.1</option>
                            <option>0.3</option>
                            <option>1</option>
                        </select>
		</form>
                <div id="googleMap" class="googleMap"></div>
		</div>
		<div class="col-md-offset-1 col-md-3" id="response">
        	<h1 class="jumbotron">Top 3 Προσφορές</h1>
            <!-- Top 3 Offers -->
			<?php foreach ($data['offers'] as $offer ){
				echo "<section class=''>";
					echo "<h3 class='text-primary'>".$offer->title . "</h3><br />";
					echo "<p class='h4'>".$offer->desc. "</p><br />";
				echo "</section>";
				}?>
                 </div>
	</div>
	<!-- Κυριο Περιεχόμενο Τελος -->
