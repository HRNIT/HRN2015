(function() {
          // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);
        
function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                   // zoom: 16,
				   
                     zoom: 4,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(47.4905280,19.0248980), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "all","elementType": "labels.text","stylers": [{"visibility": "off"}]},{"featureType": "all","elementType": "labels.text.fill","stylers": [{"saturation": 36},{"color": "#333333"},{"lightness": 40}]},{"featureType": "all","elementType": "labels.text.stroke","stylers": [{"visibility": "on"},{"color": "#ffffff"},{"lightness": 16}]},{"featureType": "all","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "administrative","elementType": "geometry.fill","stylers": [{"color": "#fefefe"},{"lightness": 20}]},{"featureType": "administrative","elementType": "geometry.stroke","stylers": [{"color": "#fefefe"},{"lightness": 17},{"weight": 1.2}]},{"featureType": "administrative","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "landscape","elementType": "geometry","stylers": [{"color": "#f5f5f5"},{"lightness": 20}]},{"featureType": "landscape","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "poi","elementType": "geometry","stylers": [{"color": "#f5f5f5"},{"lightness": 21}]},{"featureType": "poi","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "poi.park","elementType": "geometry","stylers": [{"color": "#dedede"},{"lightness": 21}]},{"featureType": "road","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "road.highway","elementType": "geometry","stylers": [{"visibility": "on"}]},{"featureType": "road.highway","elementType": "geometry.fill","stylers": [{"color": "#ffffff"},{"lightness": 17}]},{"featureType": "road.highway","elementType": "labels","stylers": [{"visibility": "on"}]},{"featureType": "road.highway","elementType": "labels.text.fill","stylers": [{"visibility": "on"}]},{"featureType": "road.highway","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "road.highway.controlled_access","elementType": "labels","stylers": [{"visibility": "on"}]},{"featureType": "road.highway.controlled_access","elementType": "labels.icon","stylers": [{"visibility": "on"}]},{"featureType": "road.arterial","elementType": "geometry","stylers": [{"color": "#ffffff"},{"lightness": 18}]},{"featureType": "road.arterial","elementType": "geometry.stroke","stylers": [{"color": "#000000"},{"lightness": "70"}]},{"featureType": "road.arterial","elementType": "labels","stylers": [{"visibility": "on"}]},{"featureType": "road.local","elementType": "geometry","stylers": [{"color": "#ffffff"},{"lightness": 16}]},{"featureType": "road.local","elementType": "geometry.stroke","stylers": [{"color": "#030303"},{"lightness": "71"}]},{"featureType": "road.local","elementType": "labels","stylers": [{"visibility": "on"}]},{"featureType": "road.local","elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"featureType": "transit","elementType": "geometry","stylers": [{"color": "#f2f2f2"},{"lightness": 19}]},{"featureType": "transit","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "transit.line","elementType": "labels","stylers": [{"visibility": "off"}]},{"featureType": "water","elementType": "geometry","stylers": [{"color": "#e9e9e9"},{"lightness": 17}]}],
    disableDoubleClickZoom: true,
    draggable: true,
    scrollwheel: false,
    panControl: true
                };

	var Pin = new google.maps.MarkerImage('img/marker.png',
		new google.maps.Size(109, 120),
		new google.maps.Point(0,0),
		new google.maps.Point(50, 150)
	);


                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('Maps');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
				
				

		
				

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(47.4905280,19.0248980),
                    map: map,
                    title: 'HRN Europe',
					icon: Pin
                });
				
var contentString = '<h2 style="font-size:12px">HRN Office - Alkotas Point</h2> <p style="font-size:12px; margin:0"><a target="_blank" href="https://goo.gl/maps/Kf1dduSKYNn">Click Here</a> to View on Maps</p>';
  
  
  var infowindow = new google.maps.InfoWindow({
  size: new google.maps.Size(150, 50)
});


    google.maps.event.addListener(marker, 'click', function() {
    map.setCenter(marker.getPosition());
    infowindow.setContent(contentString);
    infowindow.open(map, marker);
  });	
				
				
            }
			
			
		
			
})();			