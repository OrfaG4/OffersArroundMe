//Öïñôþíåé ôïí ÷Üñôç óôçí index.php óåëßäá
$('document').ready(
	function initialize(){
		var mapProperties = {
		center:new google.maps.LatLng(38.2749497,23.8102717),
		zoom:7,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap") ,mapProperties);
});
//google.maps.event.addDomListener(window, 'load', initialize);
$(document).ready(function(){
	$('#searchForm').submit(function(){
		$.ajax({
			type: 'POST',
			url: 'http://localhost/mvc/public/home/coor',
			dataType:"json",
			data: $(this).serialize()
		})
		
		.done(function(data){
			var long = data['long'];
			var lat = data['lat'];
			var myLatLang = lat+','+long
			var mapProperties = {
				center:new google.maps.LatLng(lat, long),
				zoom:13,
				mapTypeId:google.maps.MapTypeId.ROADMAP
				};
			var map=new google.maps.Map(document.getElementById("googleMap") ,mapProperties);	
			//********
			
			$.ajax({
			type: 'POST',
			url: 'http://localhost/mvc/public/home/markers',
			dataType:"json",
			data: $(this).serialize()
		})
		
		.done(function(data){
				var i=0;
				$.each(data, function(){
				var id       = this.id;
				var title    = this.title;
				var desc     = this.desc;
				var store_id = this.store_id;
				var lat      = this.lat;
				var long     = this.long
			
	  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">'+title+'</h1>'+
      '<div id="bodyContent">'+
      '<p><b>'+title+'</b>,'+desc+'</p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
			
			var marker = new google.maps.Marker({
      		position: new google.maps.LatLng(lat, long),
      		map: map,
      		title: title
  			});
	google.maps.event.addListener(marker, 'click', function() {
    	infowindow.open(map,marker);
  });

	});
			})
		.fail(function(){
			alert("Αποτυχία συλλογής δεδομένων");
			});
			

		
		//****************************
		})
		
		.fail(function() {
				alert( "Η αναζήτηση απέτυχε :(" );
		});
		
		// No refresh
		return false;
	});
	
	
});