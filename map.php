<?php
/*Template Name:Map*/

?>	<div id="map"></div>

	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6BT-qXMiStdRg2lcwRzW-GK_YfS2NixU&callback=initMap">
	</script>
	<style>
	/* Always set the map height explicitly to define the size of the div
	 * element that contains the map. */
	#map {
	  height: 100%;
	}

	</style>
	<script>
		var map;
	function initMap() {
	  map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: new google.maps.LatLng(50.9286518, 3.7591671),
		mapTypeId: 'roadmap'
	  });

	  // defines custom icons
	  var icons = {
		parking: {
		  icon: 'http://ashik.me/radix/wp-content/uploads/2019/09/Group-118.png'
		}
	  };
	  
	  function addMarker(feature) {
		var marker = new google.maps.Marker({
		  position: feature.position,
		  icon: icons[feature.type].icon,
		  map: map
		});
	  }
	  
	  // I wrote this - don't know if it works...
	  function addInfoWindow(feature) {
		// this part is from https://developers.google.com/maps/documentation/javascript/infowindows
		var infowindow = new google.maps.InfoWindow({
		  content: features.content
		});
	  }

	  // defines locations
	  var features = [
		{
		  position: new google.maps.LatLng(50.8453553, 4.3550966),
		  type: 'parking',
		  content: 'Cantersteen 10, 1000 Brussel'
		}, {
		  position: new google.maps.LatLng(51.0363432, 3.7329971),
		  type: 'parking',
		  content: 'Gaston Crommenlaan 8, 9050 Gent'
		},
	  ];

	  // adds markers via the features table
	  for (var i = 0, feature; feature = features[i]; i++) {
		addMarker(feature);
		addInfoWindow(feature);
	  }
	  
	  // marker variable is only defined within the addMarker function
	  /* marker.addListener('click', function() {
		 infowindow.open(map, marker);
	  });*/
	}
	</script>