<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Finding Me</title>

<script>
function getLocation()
{
  // Check whether browser supports Geolocation API or not
  if (navigator.geolocation) { // Supported
  
    // To add PositionOptions
	
	navigator.geolocation.getCurrentPosition(getPosition);
  } else { // Not supported
	alert("Oops! This browser does not support HTML Geolocation.");
  }
}
function getPosition(position)

{x= document.getElementById("location");

   // x.innerHTML= "https://www.google.com/maps/search/?api=1&query="+position.coords.latitude+","+position.coords.longitude;
   x.value = `<?php echo '` + "https://www.google.com/maps/search/?api=1&query=" + position.coords.latitude + "," + position.coords.longitude + `'; ?>`;
	  // "Latitude: " + position.coords.latitude + "<br>" +
	  // "Longitude: " + position.coords.longitude;

}

// To add catchError(positionError) function

</script>


</head>
<body onload="getLocation();">
<h1>Finding Me</h1>
<!-- <p id="location"></p> -->

<form role="form" method="get" action="dc.php">
	<input type="hidden" name="location" id="location">
	<button type="submit" class="btn btn-dark" name="send" value="send">Send Message</button>
</form>
</body>
</html>