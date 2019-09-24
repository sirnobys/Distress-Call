<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Finding Me</title>
<!--adding the css-->
<link type="text/css" rel="stylesheet" href="css/materialize.css" />
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
  <!--Adding the css for the font-->
  <link type="text/css" rel="stylesheet" href="css/materializeicon.css"/>
  <style>
    
    #panic{
      width:20rem;
      height:20rem;
      background:red;
      position:relative;
      top:30px;
      border-radius:50%;
    }

    #sos{
       position:relative;
       top:20%;
       font-size:2rem;
    }
  </style>

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
<script type="text/javascript" src="/js/materialize.js"></script>
  <script type="text/javascript" src="/js/materialize.min.js"></script>
<body onload="getLocation();">

<!-- <p id="location"></p> -->
<div class="col s12 show-medium-and-up center">
<div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
    
        
<h1>Finding Me</h1>
<form role="form" method="get" action="dc.php">
	<input type="hidden" name="location" id="location">
	<button id="panic" type="submit" class="btn btn-dark" name="send" value="send"><h1 id="sos" class="flow-text">Send Message</h1></button>
</form>
</div>
</body>
</html>