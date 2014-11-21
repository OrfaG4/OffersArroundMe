
	<!-- Κυριο Περιεχόμενο Αρχή -->
	<div class="container-full">
		<div class="col-md-8">
		<form id="searchForm" method="POST">
			<h1 class="jumbotron">Δώστε την τοποθεσια σας! &nbsp&nbsp
			<input type="text" placeholder="Search..." name = "location"/> 
			<button type="submit" class="btn btn-primary" id="searchBtn">Αναζήτηση</button></h1>
		</form>
			<div id="googleMap" class="googleMap"></div>
		</div>
		<div class="col-md-offset-1 col-md-3" id="response">
        	<h1 class="jumbotron">Κορυφαίες Προσφορές</h1>
            <?php foreach ($data['offers'] as $offer ){
					echo "<h3>".$offer->title . "</h3><br />";
					echo "<p>".$offer->desc. "</p><br />";
				}?>
        </div>
	</div>
	<!-- Κυριο Περιεχόμενο Τελος -->