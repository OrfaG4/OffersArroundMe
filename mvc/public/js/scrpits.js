var myLatLong = null;
$(document).ready(
	function initialize(){
		//arxikopoiisi tou xarti
		var imgPath = "http://localhost/mvc/public/img";
		mapProperties = {
		center:new google.maps.LatLng(40.2749497,23.8102717),
		zoom:7,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
                
		var map=new google.maps.Map(document.getElementById("googleMap") ,mapProperties);
		//*************************************************
		//pernw ta dedomena apo txt arxeio kai dimiourgw marker
		$.ajax({
			type: 'POST',
			url: 'http://localhost/mvc/public/location/index',
			dataType:"json",
			data: $(this).serialize()
		})
			.done(function(data){
				var long = data['long'];
				var lat = data['lat'];
				//**************************************			
				myLocationMarker = new google.maps.Marker({
				position: new google.maps.LatLng(lat, long),
				map: map,
				title:"My Location" 
				});
				myLocationMarker.setIcon(imgPath+"/mylocation.png");
				myLatLong = new google.maps.LatLng(lat, long);
			})

			//**************************************
			//an apotyxei i sullogi dedomenwn apo to txt arxeio
			.fail(function() {
					alert( "Αποτυχια συλλογής δεδομένων" );
			});
		//*************************************************
		//*************************************************
		//Anazitisi
		$('#searchForm').submit(function(){
			//pernw ta dedomena pou ethesa pros anazitisi kai kanw zoom stin perioxi
			$.ajax({
				type: 'POST',
				url: 'http://localhost/mvc/public/home/coor',
				dataType:"json",
				data: $(this).serialize()
			})
			.done(function(data){
				var searchLong = data['long'];
				var searchLat = data['lat'];
                                var dist = data['distance'];
				var searchLatLng = new google.maps.LatLng(searchLat, searchLong);
				map.setCenter(searchLatLng);
				map.setZoom(14);
				
				//***************************************************
				
				//************************************************
				//Markers apo tin vasi
				$.ajax({
					type: 'POST',
					url: 'http://localhost/mvc/public/home/markers',
					dataType:"json",
					data: $(this).serialize()
					})
				
					.done(function(data){
							$.ajax({
								type: 'POST',
								url: 'http://localhost/mvc/public/location/index',
								dataType:"json",
								data: $(this).serialize()
							})
								.done(function(data){
									var myLong = data['long'];
									var myLat = data['lat'];	
									var myInsideLatLong = new google.maps.LatLng(myLat, myLong);
								})
							
							//***************************************
						var i=0;
						$.each(data, function(){
							var id       = this.id;
							var title    = this.title;
							var desc     = this.desc;
							var store_id = this.store_id;
							var lat      = this.lat;
							var long     = this.long
							
							//***************************************
							latLangToCompare = new google.maps.LatLng(lat, long);
							i++;
							distance = (google.maps.geometry.spherical.computeDistanceBetween (latLangToCompare, myLatLong)/ 1000).toFixed(2);
							//***************************************
							
							//*******************************************
							
					//********
					//Gia tis kontines prosfores MONO
					if(distance <= dist){
							//oi grammes pou enwnoun prosfores-xristi		
							polyline = new google.maps.Polyline({
								path: [myLatLong, latLangToCompare],
								strokeColor: "#FF0000",
								strokeOpacity: 0.5,
								strokeWeight: 4,
								geodesic: true,
								map: map
							});
							
							//*******************************************
							
							//To parathuraki pou vgainei apo ton marker
							var contentString = '<div id="content">'+
							'<div id="siteNotice">'+
							'</div>'+
							'<h1 id="firstHeading" class="firstHeading">'+title+'</h1>'+
							'<div id="bodyContent">'+
							'<p><b>'+title+'</b>,'+desc+'</p>'+
							'<p> <b>DISTANCE:' + distance +' Km</b></p>'+
							'</div>'+
							'</div>';
							var infowindow = new google.maps.InfoWindow({
							  content: contentString
							});
						//Dimiourgia marker
						marker = new google.maps.Marker({
						position: new google.maps.LatLng(lat, long),
						map: map,
						title: title
						});
						marker.placeIndex = i;
						
						google.maps.event.addListener(marker, 'mouseover', function() {
						infowindow.open(map,this);
						});
						google.maps.event.addListener(marker, 'click', function() {
						infowindow.close(map,this);
						});
                                        }
					});
					
				})
				//an apotyxei i sullogi dedomenwn apo tin vasi
				.fail(function(){
					alert("Αποτυχία συλλογής δεδομένων");
					});
			})
			//An apotuxei i anazitisi
			.fail(function() {
					alert( "Η αναζήτηση απέτυχε :(" );
			});
			// No refresh
			return false;
		});
		
});
