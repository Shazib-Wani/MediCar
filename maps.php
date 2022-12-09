<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

<!-- bootstrap.min css -->
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
<!-- Icon Font Css -->
<link rel="stylesheet" href="plugins/icofont/icofont.min.css">
<!-- Slick Slider  CSS -->
<link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/style.css">
<?PHP 

 
$url = "http://maps.google.com/maps/api/geocode/json?address=bangalore+india&sensor=false"; 
 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_PROXYPORT, 3128); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
$response = curl_exec($ch); 
curl_close($ch); 
 
$response = json_decode($response); 
 
// $lat = $response->results[0]->geome try->location->lat;
// $long = $response->results[0]->geometry->location->lng; 

$lat="12.933110";
$long ="77.691280";

?> 
 
<!DOCTYPE html> 
<html> 
<head> 
<!-- <title>Map Example</title>  -->
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<style type="text/css"> 
#map_canvas { height: 330px; width: 550px; } 
</style> 
<script type="text/javascript" 
src="http://maps.googleapis.com/maps/api/js?sensor=false"> 
</script> 
<script type="text/javascript"> 
function initialize() { 
var latlng = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>); 
var addressMarker = new google.maps.LatLng(<?php echo $lat; ?>, <?php echo $long; ?>); 
var myOptions = { 
zoom: 15, 
center: latlng, 
mapTypeId: google.maps.MapTypeId.ROADMAP 
}; 
var map = new google.maps.Map(document.getElementById("map_canvas"), 
myOptions); 
 
marker = new google.maps.Marker({ map:map, position: addressMarker }); 
} 
 
</script> 
</head> 
<body onload="initialize()"> 
<!-- <h2>Map Example</h2>  -->
<div length='600px' weidth='600px' id="map_canvas"></div> 
<a class="btn btn-main btn-round-full" href="confirmation.php">Book Now<i class="icofont-simple-right ml-2"></i></a>
</body> 
</html> 