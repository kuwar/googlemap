<!DOCTYPE html>
<html>
<head>
	<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAd9PGfwlHvYOk5uOt_sK0dgMeKlaPzoI8"></script>
	<script>
	var myCenter=new google.maps.LatLng(51.508742,-0.120850);
	function initialize() {
		var mapProp = {
			center:myCenter,
			zoom:5,
			mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

		// setting marker
		var marker=new google.maps.Marker({
			position:myCenter,
			/*icon:'pinkball.png',*/
			animation:google.maps.Animation.BOUNCE,
			title:'Click to view info'
		});
		marker.setMap(map);

		// setting circle
		var myCity = new google.maps.Circle({
			center:myCenter,
			radius:200000,
			strokeColor:"#0000FF",
			strokeOpacity:0.8,
			strokeWeight:2,
			fillColor:"#0000FF",
			fillOpacity:0.4
		});
		myCity.setMap(map);

		// Adding info windows on the marker
		/*var infowindow = new google.maps.InfoWindow({
			content:"Hello World!"
		});
		infowindow.open(map,marker);*/

		// Zoom to 9 when clicking on marker
		/*google.maps.event.addListener(marker,'click',function() {
			map.setZoom(9);
			map.setCenter(marker.getPosition());
		});*/

		// Show info windows on clicking marker
		var infowindow = new google.maps.InfoWindow({
			content:"Hello World!"
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

		//
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
	<div id="googleMap" style="width:1000px;height:500px;"></div>
</body>

</html>